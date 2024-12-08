<?php
include('conexion.php');



// Verificar si el ID de la consulta médica fue proporcionado
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID de consulta no proporcionado.");
}

$consulta_id = $_GET['id'];

$sql_consulta = "
        SELECT
        p.ID as pacienteid,
        cm.ID AS ID_Consulta,
        CONCAT(per_doctor.PNombre, ' ', per_doctor.SNombre, ' ', per_doctor.PApellido, ' ', per_doctor.SApellido) AS Nombre_Doctor,
        CONCAT(per_paciente.PNombre, ' ', per_paciente.SNombre, ' ', per_paciente.PApellido, ' ', per_paciente.SApellido) AS Nombre_Paciente,
        per_paciente.Identidad AS Identidad_Paciente,
        per_paciente.RTN AS RTN_Paciente,
        d.Descripcion AS Diagnostico,
        iq.Observaciones AS DetallesIntervencion,
        iq.Duracion AS Intervencion_Duracion,
        r.Medicamento AS Receta,
        ee.Nombre AS Estudio_Nombre,
        ee.Costo AS Estudio_Costo,
        pol.Detalles As Descripcion_Poliza,
        pol.ID AS poliza_id,
        tp.Descripcion AS Tipo_Poliza_Descripcion,
        tp.Monto_Cubrir AS Tipo_Poliza_Monto,
        CURRENT_DATE AS Fecha_Actual
    FROM CONSULTAS_MEDICA cm
    LEFT JOIN CITA_MEDICA ci ON cm.CITA_MEDICA_ID = ci.ID
    LEFT JOIN EMPLEADO e ON ci.DOCTOR_ID = e.ID
    LEFT JOIN PERSONA per_doctor ON e.Persona_ID = per_doctor.ID
    LEFT JOIN PACIENTE p ON ci.PACIENTE_ID = p.ID
    LEFT JOIN PERSONA per_paciente ON p.PERSONA_ID = per_paciente.ID
    LEFT JOIN DIAGNOSTICO d ON cm.DIAGNOSTICO_ID = d.ID
    LEFT JOIN INTERVENCION_QUIRURGICA iq ON cm.Intervencion_quirurgica_ID = iq.ID
    LEFT JOIN RECETA r ON cm.RECETA_ID = r.ID
    LEFT JOIN CONSULTAS_MEDICA_has_Pruebas_diagnostico cmdp ON cm.ID = cmdp.CONSULTAS_MEDICAS_ID
    LEFT JOIN PRUEBAS_DIAGNOSTICO pd ON cmdp.Pruebas_diagnostico_ID = pd.ID
    LEFT JOIN ESTUDIOS_ESPECIALIZADO ee ON pd.Estudios_ID = ee.ID
    LEFT JOIN PACIENTE_has_POLIZA php ON p.ID = php.PACIENTE_ID
    LEFT JOIN POLIZA pol ON php.POLIZA_ID = pol.ID
    LEFT JOIN TIPO_POLIZA tp ON pol.TIPO_POLIZA_ID = tp.ID
    WHERE cm.ID = ?;";


    $stmt = $conexion->prepare($sql_consulta);
    $stmt->bind_param("i", $consulta_id);
    
    if (!$stmt->execute()) {
        die("Error al ejecutar la consulta: " . $stmt->error);
    }
    
    $result = $stmt->get_result();
    
  
    if ($result->num_rows == 0) {
        die("Consulta médica no encontrada. ID: " . $consulta_id);
    }
    
    // Procesar los datos de la consulta médica
    $consulta = $result->fetch_assoc();
    
    // Costo fijo de la consulta
    $consulta_costo = 100; // Ajustable según sea necesario
    
    // Recuperar datos de la consulta
    $costo = $consulta_costo + $consulta['Estudio_Costo']; // Costo total antes de aplicar seguro
    $monto_poliza = $consulta['Tipo_Poliza_Monto']; // Monto máximo cubierto por la póliza
    
    // Inicializar variables
    $monto_cubierto = 0;
    $mensaje_cubierto_por_seguro = "";
    
    // Evaluar condiciones
    if ($costo <= $monto_poliza) {
        $monto_cubierto = $costo; 
        $costo = 0;
        $mensaje_cubierto_por_seguro = "Cubierto por seguro médico.";
    } else {
        $monto_cubierto = $monto_poliza; 
        $costo = $costo - $monto_poliza;
        $mensaje_cubierto_por_seguro = ""; 
    }
    
    // Crear la fecha máxima de pago (1 mes desde la fecha actual)
    $fecha_emision = date("Y-m-d"); // Fecha actual
    $fecha_pago = date("Y-m-d", strtotime("+1 month", strtotime($fecha_emision)));
    
    // Insertar en la tabla de pagos
    $sql_insertar_pago = "
        INSERT INTO pago (Fecha_Pago, TIPO_PAGO_ID) 
        VALUES (?, ?);
    ";
    
    $stmt_pago = $conexion->prepare($sql_insertar_pago);
    if (!$stmt_pago) {
        die("Error al preparar la consulta para el pago: " . $conexion->error);
    }
    
    // Usar el ID del tipo de pago como 1, según tu descripción
    $tipo_pago_id = 1;
    
    $stmt_pago->bind_param("si", $fecha_pago, $tipo_pago_id);
    
    if (!$stmt_pago->execute()) {
        die("Error al insertar el pago: " . $stmt_pago->error);
    }
    
    // Obtener el ID del pago recién creado
    $pago_id = $conexion->insert_id;
    
    // Insertar en la tabla factura
    $sql_insertar_factura = "
        INSERT INTO factura (Fecha_Emision, POLIZA_ID, Monto_Total, Monto_Cubierto, Detalles, PACIENTE_ID, Consulta_Medica_ID, PAGO_ID)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?);
    ";
    
    $stmt_factura = $conexion->prepare($sql_insertar_factura);
    if (!$stmt_factura) {
        die("Error al preparar la consulta para la factura: " . $conexion->error);
    }
    
    // Vincular parámetros
    $stmt_factura->bind_param(
        "siiisiii", 
        $fecha_emision, 
        $consulta['poliza_id'], 
        $costo,           // Residuo después de aplicar seguro
        $monto_cubierto,  // Monto cubierto por la póliza
        $consulta['Diagnostico'], 
        $consulta['pacienteid'], 
        $consulta_id,
        $pago_id          // ID del pago recién creado
    );
    
    if (!$stmt_factura->execute()) {
        die("Error al insertar la factura: " . $stmt_factura->error);
    }
    
    // Confirmar inserción
    $fecha_actual = date("Y-m-d");
    $factura_id = $conexion->insert_id;
    // Cerrar las conexiones
    $stmt_pago->close();
    $stmt_factura->close();
    $conexion->close();
    ?>




<!DOCTYPE html>
<html lang="es">
<head>
<title>Factura Médica</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Roboto', sans-serif; 
            margin: 20px; 
            background-color: #f4f4f4;
        }
        .factura { 
            border: 1px solid #ccc; 
            padding: 20px; 
            max-width: 600px; 
            margin: auto; 
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .titulo { 
            text-align: center; 
            font-size: 48px; 
            margin-bottom: 20px; 
            font-weight: bold;
            color: #3c3c3c;
        }
        .detalle { 
            margin-bottom: 15px; 
            font-size: 16px; 
            line-height: 1.6;
            color: #555;
        }
        .total { 
            font-weight: bold; 
            font-size: 20px; 
            text-align: right; 
            margin-top: 20px;
            color: #333;
        }
        .boton { 
            text-align: center; 
            margin-top: 20px; 
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
    
</head>
<body>

    <div class="factura" id="factura">
        <div class="titulo">Factura Médica</div>
        <p class="detalle"><strong>Fecha Emision:</strong> <?php echo htmlspecialchars($fecha_actual); ?></p>
        <p class="detalle"><strong>Factura ID:</strong> <?php echo htmlspecialchars($factura_id); ?></p>
        <p class="detalle"><strong>Consulta ID:</strong> <?php echo htmlspecialchars($consulta['ID_Consulta']); ?></p>
        <p class="detalle"><strong>Poliza ID:</strong> <?php echo htmlspecialchars($consulta['poliza_id']); ?></p>
        <p class="detalle"><strong>Paciente ID:</strong> <?php echo htmlspecialchars($consulta['pacienteid']); ?></p>
        <p class="detalle"><strong>Paciente:</strong> <?php echo htmlspecialchars($consulta['Nombre_Paciente']); ?></p>
        <p class="detalle"><strong>Detalle de la consulta:</strong> <?php echo htmlspecialchars($consulta['DetallesIntervencion']); ?></p>
        <p class="detalle"><strong>Diagnóstico:</strong> <?php echo htmlspecialchars($consulta['Diagnostico']); ?></p>
        <p class="detalle"><strong>Costo de la consulta médica:</strong> L <?php echo number_format($consulta_costo, 2); ?></p>
        <p class="detalle"><strong>Estudio:</strong> <?php echo htmlspecialchars($consulta['Estudio_Nombre']); ?></p>
        <p class="detalle"><strong>Costo de estudios especializados:</strong> L <?php echo number_format($consulta['Estudio_Costo'],2); ?></p>
        <p class="detalle"><strong>Poliza:</strong> <?php echo htmlspecialchars($consulta['Descripcion_Poliza']); ?></p>
        <p class="detalle"><strong>Seguro:</strong> L <?php echo number_format($consulta['Tipo_Poliza_Monto'], 2); ?></p>
        <hr>
        <p class="total"><strong>Total a pagar:</strong> 
    <?php 
    if ($costo == 0) {
        echo "Cubierto por seguro médico";  // Muestra el mensaje si el costo (total pendiente) es 0
    } else {
        echo "L " . number_format($costo, 2);  // Muestra el costo pendiente con formato de moneda
    }
    ?>
</p>
<p class="monto-cubierto"><strong>Monto cubierto por la póliza:</strong> 
    <?php 
        echo "L " . number_format($monto_cubierto, 2);  // Muestra el monto cubierto con formato de moneda
    ?>
</p>

</p>
</p>

</p>

    </div>
    <div class="boton">
        <button onclick="imprimirFactura()">Imprimir/Guardar PDF</button>
        <button onclick="regresarPagina()">Regresar a Consultas</button>
    </div>
    <script>
        function imprimirFactura() {
            window.print();
        }
        function regresarPagina() {
    history.back(); // Regresa a la página anterior
}
    </script>
</body>
</html>
