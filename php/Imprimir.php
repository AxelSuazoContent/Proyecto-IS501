<?php

include 'conexion.php';

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'" 
          href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter:wght@400;500;700;900&amp;family=Noto+Sans:wght@400;500;700;900" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
    @page {
        ssize: A3 landscape;
        margin: 0;
    }
    
    body {
        overflow-x: hidden;
        font-family: 'Inter', 'Noto Sans', sans-serif;
        background-color: #f5f5f5;
    }

    header {
        background-color: #F5F5F5;
        border-bottom: 1px solid #e5e7eb;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    nav {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }

    nav a {
        font-size: 1.3rem;
        font-weight: 600;
        color: #374151;
        text-decoration: none;
    }

    nav a:hover {
        color: #1d4ed8;
    }

    /* Botones visibles normalmente */
    .boton {
        display: inline-block; /* Asegúrate de que sean visibles por defecto */
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        font-weight: bold;
        color: #fff;
        background-color: #FFFFFF.;
        border: none;
        border-radius: 0.5rem;
        cursor: pointer;
    }

    .boton:hover {
        background-color: #0056b3;
    }

    /* Menú desplegable */
    .dropdown {
        position: relative;
    }

    .dropdown-btn {
        font-size: 1.3rem;
        font-weight: 600;
        color: #374151;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: none;
        border: none;
    }

    .dropdown-btn:hover {
        color: #1d4ed8;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 0.375rem;
        overflow: hidden;
        z-index: 10;
        min-width: 12rem;
    }

    .dropdown-content a {
        display: block;
        padding: 0.75rem 1rem;
        color: #374151;
        text-decoration: none;
        font-size: 1rem;
    }

    .dropdown-content a:hover {
        background-color: #f3f4f6;
        color: #1d4ed8;
    }

    /* Mostrar menú al pasar el ratón */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Estilos específicos para impresión */
    @media print {
        .boton {
            display: none; /* Oculta los botones durante la impresión */
        }

        header, nav {
            display: none; /* Oculta el encabezado y la navegación al imprimir */
        }
    }
</style>



    
<main class="flex flex-col items-center justify-center px-10 py-10 w-full  mx-auto bg-gray-50">
    <h2 class="text-3xl font-extrabold mb-9 text-center">HISTORIAL MEDICO</h2>
    
    <!-- Formulario de búsqueda y selección de filas por página -->
    <form method="GET" class="mb-6 w-full max-w-6xl flex gap-6 justify-center">
        <label class="relative flex w-3/4"> 
            <input 
                type="text" 
                name="search" 
                placeholder="Buscar por ID, descripción o licencia" 
                class="w-full py-4 px-6 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-lg" 
                value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
            />
            <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 ">
                🔍
            </button>
        </label>

        <label class="relative flex w-1/4">
            <select name="rows_per_page" 
                class="w-full py-4 px-6 border border-gray-300 rounded-lg text-lg " 
                style="font-size: 1rem;">
                <option value="5" <?= ($_GET['rows_per_page'] ?? '5') == '5' ? 'selected' : '' ?>>5</option>
                <option value="10" <?= ($_GET['rows_per_page'] ?? '5') == '10' ? 'selected' : '' ?>>10</option>
                <option value="15" <?= ($_GET['rows_per_page'] ?? '5') == '15' ? 'selected' : '' ?>>15</option>
            </select>
        </label>
    </form>

    <!-- Contenedor de la tabla con overflow-x-auto para hacerla desplazable -->
    <div class="bg-white shadow-lg overflow-x-auto rounded-lg w-full">
    <table class="min-w-full border-collapse text-sm">
    <thead class="bg-gray-100 border-b">
        <tr>
            <th class="px-4 py-6 text-left font-medium text-gray-600" style="width: 10%;">ID</th>
            <th class="px-4 py-6 text-left font-medium text-gray-600" style="width: 12%;">Fecha Inicio</th>
            <th class="px-4 py-6 text-left font-medium text-gray-600" style="width: 12%;">Fecha de Visita</th>
            <th class="px-4 py-6 text-left font-medium text-gray-600" style="width: 20%;">Nombre del Paciente</th>
            <th class="px-4 py-6 text-left font-medium text-gray-600" style="width: 10%;">Identidad</th>
            <th class="px-4 py-6 text-left font-medium text-gray-600" style="width: 10%;">Teléfonos</th>
            <th class="px-4 py-6 text-left font-medium text-gray-600" style="width: 15%;">Correo</th>
            <th class="px-4 py-6 text-left font-medium text-gray-600" style="width: 25%;">Observaciones</th> <!-- Ancho ajustado -->
        </tr>
    </thead>
    <tbody>
        <?php
        $busqueda = $conexion->real_escape_string($_GET['search'] ?? '');
        $rows_per_page = intval($_GET['rows_per_page'] ?? 5);
        $page = max(intval($_GET['page'] ?? 1), 1);
        $offset = ($page - 1) * $rows_per_page;

        $consulta = $conexion->query(" 
            SELECT 
                HM.ID AS HistorialID,
                HM.Fecha_Inicio,
                HM.Fecha,
                HM.Observaciones,
                CONCAT(P.PNombre, ' ', P.SNombre, ' ', P.PApellido, ' ', P.SApellido) AS PacienteNombreCompleto,
                P.Identidad,
                P.correo,
                P.sexo,
                GROUP_CONCAT(T.Numero SEPARATOR ' , ') AS TelefonosPaciente
            FROM 
                Historial_Medico HM
            INNER JOIN PACIENTE PAC ON HM.Paciente_ID = PAC.ID
            INNER JOIN PERSONA P ON PAC.PERSONA_ID = P.ID
            LEFT JOIN TELEFONO T ON T.Persona_ID = P.ID
            GROUP BY HM.ID, HM.Fecha_Inicio, HM.Fecha, HM.Observaciones, P.ID
            ORDER BY HM.Fecha DESC
            LIMIT $offset, $rows_per_page;
        ");

        // Consulta para contar el total de filas
        $total_consulta = $conexion->query("
            SELECT COUNT(DISTINCT HM.ID) AS total
            FROM 
                Historial_Medico HM
            INNER JOIN PACIENTE PAC ON HM.Paciente_ID = PAC.ID
            INNER JOIN PERSONA P ON PAC.PERSONA_ID = P.ID
            LEFT JOIN TELEFONO T ON P.ID = T.Persona_ID
            WHERE 
                HM.Observaciones LIKE '%$busqueda%'
                OR CONCAT(P.PNombre, ' ', P.SNombre, ' ', P.PApellido, ' ', P.SApellido) LIKE '%$busqueda%'
                OR P.Identidad LIKE '%$busqueda%'
                OR T.Numero LIKE '%$busqueda%'
                OR P.correo LIKE '%$busqueda%'
                OR P.sexo LIKE '%$busqueda%'
        ");

        if ($total_consulta) {
            $total_rows = $total_consulta->fetch_assoc()['total'];
            $total_pages = ceil($total_rows / $rows_per_page);
        } else {
            $total_rows = 0;
            $total_pages = 1; // Asignar al menos 1 página para evitar errores
        }

        // Mostrar resultados
        if ($consulta->num_rows > 0) {
            while ($row = $consulta->fetch_assoc()) {
                echo "<tr class='border-t bg-[#f9fafb]'>
                    <td class='px-4 py-6'>{$row['HistorialID']}</td>
                    <td class='px-4 py-6'>{$row['Fecha_Inicio']}</td>
                    <td class='px-4 py-6'>{$row['Fecha']}</td>
                    <td class='px-4 py-6'>{$row['PacienteNombreCompleto']}</td>
                    <td class='px-4 py-6'>{$row['Identidad']}</td>
                    <td class='px-4 py-6'>{$row['TelefonosPaciente']}</td>
                    <td class='px-4 py-6'>{$row['correo']}</td>
                    <td class='px-2 py-6'>{$row['Observaciones']}</td>
                </tr>";
            }
        } else {
            echo "<tr class='bg-[#f9fafb]'><td colspan='9' class='px-4 py-6 text-center text-gray-500'>No se encontraron resultados</td></tr>";
        }
        ?>
    </tbody>
</table>

    </div>

    <!-- Paginación -->
    <div class="mt-10 flex flex-wrap justify-center gap-6 items-center w-full max-w-7xl">
        <div class="flex gap-2">
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?search=<?= htmlspecialchars($busqueda) ?>&rows_per_page=<?= $rows_per_page ?>&page=<?= $i ?>"
                   class="px-6 py-4 border <?= $i == $page ? 'bg-blue-500 text-white' : 'bg-white text-gray-700' ?> rounded-lg text-lg">
                    <?= $i ?>
                </a>
            <?php endfor; ?>
        </div>
        <div class="container">
                <a href="historial.php" class="w-full max-w-lg rounded-xl bg-white-600 text-black font-bold py-3 px-6 border border-black hover:bg-white-600 focus:ring-4 focus:ring-blue-300 boton"  >Regresar</a>
                <a href="" class="w-full max-w-lg rounded-xl bg-white-600 text-black font-bold py-3 px-6 border border-black hover:bg-white-600 focus:ring-4 focus:ring-blue-300 boton" onclick="window.print()">Imprimir</a>
</div>  
    </div>
    

</main>


 </div>
</body>


          </div>
</html>

