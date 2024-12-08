<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Manrope%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Pagina registrar Consulta Medica</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
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
</style>

<header class="flex items-center justify-between px-20 py-5">
    <div class="flex items-center gap-2">
        <svg
            viewBox="0 0 48 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6"
        >
            <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z"
                fill="currentColor"
            ></path>
        </svg>
        <h1 class="text-3xl font-bold">MediCare</h1>
    </div>

    <nav>
        <div class="dropdown">
            <button class="dropdown-btn">
                Gestiones Personales
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="dropdown-content">
                <a href="Pacientes.php">Pacientes</a>
                <a href="Empleado.php">Empleados</a>
                <a href="Historial.php">Historial Médico</a>
            </div>
        </div>
        <div class="dropdown">
        <button class="dropdown-btn">
                Otras Gestiones
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        <div class="dropdown-content">
                <a href="CitasMedica.php">Citas</a>
                <a href="ConsultaMedica.php">Consultas</a>
                <a href="Polizas.php">Polizas</a>
            </div>
       
        </div>
        <a href="inicio.php">Inicio</a>
        <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-16"
              
            ><img src="../Asset/logos-UNAH-11.png" alt="Descripción de la imagen"></div>
    </nav>
</header>
        
    <div class="px-5 flex justify-center items-center py-5 bg-gray-100">
      <div class="layout-content-container bg-gray-200 p-10 rounded-lg shadow-lg flex flex-col w-full max-w-[512px]">
        <div class="flex flex-wrap justify-between gap-3 mb-6">
            <p class="text-[#0e141b] tracking-light text-[47px] font-extrabold leading-tight text-center w-full">
                Registrar Consulta Medica
            </p>
        </div>

        <?php
              // Verificar si el formulario fue enviado y si el checkbox está marcado
            $mostrarCampos = isset($_POST['terminos']) && $_POST['terminos'] == 'on';
?>



        <!-- Formulario -->
        <form method="POST" action="" class="formulario">
        

        <?php
include_once("conexion.php");

// Sanitizamos el parámetro 'id' para evitar inyección SQL
$id = intval($_REQUEST['id']);



$sql = "
SELECT 
    CONCAT(p.PNombre, ' ', p.SNombre, ' ', p.PApellido, ' ', p.SApellido) AS Paciente_Nombre_Completo,
    CONCAT(d.PNombre, ' ', d.SNombre, ' ', d.PApellido, ' ', d.SApellido) AS Doctor_Nombre_Completo,  
    p.Numero_Emergencia,
    c.Fecha_Hora,
    h.Numero AS Habitacion_Numero,
    p.sexo AS Sexo_Paciente,
    c.Observaciones
FROM CITA_MEDICA c
JOIN PACIENTE pac ON c.PACIENTE_ID = pac.ID
JOIN PERSONA p ON pac.PERSONA_ID = p.ID
JOIN EMPLEADO e ON c.DOCTOR_ID = e.ID
JOIN PERSONA d ON e.PERSONA_ID = d.ID  
JOIN HABITACION h ON c.HABITACIONES_ID = h.ID
WHERE c.ID = $id";  // Aquí nos aseguramos de filtrar por el ID de cita


$resultado = $conexion->query($sql);

// Inicializamos las variables para evitar errores si no hay datos
$row1 = null;
$nombreCompleto = '';
$personaID = '';
$numeroTelefono = '';

// Verificamos si se obtuvieron resultados
if ($resultado && $resultado->num_rows > 0) {
    // Si se encontraron datos, los procesamos
    $row1 = $resultado->fetch_assoc();
    
} 

?>



<input type="hidden" name="PersonaID" value="<?php echo htmlspecialchars($personaID); ?>">
<input type="hidden" name="id" value="<?php echo htmlspecialchars($citaID); ?>">

<div class="flex max-w-full flex-wrap items-end gap-6 mb-6">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Fecha y Hora</p>
                <input
                  name="FechaHora"
                  type="text"
                  placeholder="año-mes-dia xx:xx:xx"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                 value="<?php echo isset($row1['Fecha_Hora']) ? $row1['Fecha_Hora'] : ''; ?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-6 mb-6">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Doctor</p>
                <input
                  name="Doctor"
                  type="text"
                  placeholder="Nombre Doctor"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  
                  value="<?php echo isset($row1['Doctor_Nombre_Completo']) ? $row1['Doctor_Nombre_Completo'] : ''; ?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-6 mb-6">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Habitacion</p>
                <input
                  name="Doctor"
                  type="text"
                  placeholder="201"
                  class="form-input rounded-xl border border-black bg-white h-5 p-4 text-base w-40"
                  
                  value="<?php echo isset($row1['Habitacion_Numero']) ? $row1['Habitacion_Numero'] : ''; ?>"
                />
              </label>
            </div>


     

<div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
    <label class="flex flex-col w-full">
        <p class="text-[#111717] text-base font-medium leading-normal pb-2">Nombre Completo Paciente</p>
        <input
            name="NombreCompleto"
            placeholder="Nombre Paciente"
            class="form-input flex w-full resize-none rounded-xl border border-gray-400 bg-white focus:ring-2 focus:ring-blue-500 h-14 placeholder-gray-500 p-4 text-base"
            
            value="<?php echo isset($row1['Paciente_Nombre_Completo']) ? $row1['Paciente_Nombre_Completo'] : ''; ?>"
        />
    </label>
</div>

<div class="flex max-w-full flex-wrap items-end gap-6 mb-7">
    <p class="text-[#111717] text-base font-medium leading-normal pb-0.3">Sexo</p>
    <label>
        <input type="radio" name="sexo" value="H" 
            <?php echo (isset($row1['Sexo_Paciente']) && $row1['Sexo_Paciente'] === 'H') ? 'checked' : ''; ?>/>
        Hombre
    </label>
    <label>
        <input type="radio" name="sexo" value="M" 
            <?php echo (isset($row1['Sexo_Paciente']) && $row1['Sexo_Paciente'] === 'M') ? 'checked' : ''; ?>/>
        Mujer
    </label>  
    <label>
        <input type="radio" name="sexo" value="O" 
            <?php echo (isset($row1['Sexo_Paciente']) && $row1['Sexo_Paciente'] === 'O') ? 'checked' : ''; ?>/>
        Pref. No Decir
    </label>
</div>


            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Observaciones iniciales</p>
                <input
                  name="ObserIni"
                  placeholder="¿Por qué vino?"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                    value="<?php echo isset($row1['Observaciones']) ? $row1['Observaciones'] : ''; ?>"
                 /> 
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Num. De Emergencia</p>
                <input
                name = "Emergencia"
                  placeholder="xxxxxxxxxxxxxxx"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                 value="<?php echo isset($row1['Numero_Emergencia']) ? $row1['Numero_Emergencia'] : ''; ?>"
                  
                />
              </label>
            </div>
                       
            

            <div class="flex max-w-full flex-wrap items-end gap-6 mb-6">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Altura (m)</p>
                <input
                name="Altura"
                type="text"
                placeholder="1.77"
                class="form-input rounded-xl border border-black bg-white h-8 p-2 text-base w-32"
                />
              </label>
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Peso (lbrs)</p>
                <input
                name="Peso"
                type="text"
                placeholder="10"
                class="form-input rounded-xl border border-black bg-white h-8 p-2 text-base w-32"
                />
              </label>
            </div>
            <div class="flex max-w-full flex-wrap items-end gap-6 mb-6">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Presion Arterial (mmhg)</p>
                <input
                name="Presion"
                type="text"
                placeholder="120/80"
                class="form-input rounded-xl border border-black bg-white h-8 p-2 text-base w-32"
                />
              </label>
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Temperatura(°C)</p>
                <input
                name="Temperatura"
                type="text"
                placeholder="32.2"
                class="form-input rounded-xl border border-black bg-white h-8 p-2 text-base w-32"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Observaciones</p>
                <textarea
                  name="Obser"
                  placeholder="¿qué puede decir usted?"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                ></textarea>
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-8">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Diagnostico</p>
                <textarea
                  name="Diagnostico"
                  placeholder="¿Que pudo observar?"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                ></textarea>
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-1 mb-10">
            <label  class="text-[#111717] text-base font-medium leading-normal pb-3">Recetas</label>
            <select name="receta" class="form-select" aria-label="Default select example">
            <option selected disabled>--Seleccionar Receta--</option>
            <?php
            include("conexion.php");

            // Consulta para obtener las pólizas
            $sql = $conexion->query("SELECT * FROM Receta");

            // Generar las opciones del select
            while ($resultado = $sql->fetch_assoc()) {
            echo "<option value='" . $resultado['ID'] . "'>" . $resultado['Medicamento'] . " - Dosis " . $resultado['Dosis'] . "</option>";
            }
            ?>
    </select>
    </div>
    


            <div class="flex max-w-full flex-wrap items-end gap-6 mb-9">
    <label class="text-[#111717] text-base font-medium leading-normal pb-2">Gravedad</label>
    <select 
        name="severidad" 
        class="form-select rounded-xl border border-black bg-white h-9 px-4 text-base w-64" 
        aria-label="Default select example"
    >
        <option selected disabled>--Seleccionar Gravedad--</option>
        <option value="nada_severo">Nada Severo</option>
        <option value="serio">Serio</option>
        <option value="muy_serio">Muy Serio</option>
    </select>
</div>


<div class="flex max-w-full flex-wrap items-end gap-1 mb-7">
            <label  class="text-[#111717] text-base font-medium leading-normal pb-3">Estudios Especializados</label>
            <select name="estudio" class="form-select" aria-label="Default select example">
            <option selected disabled>--Seleccionar Estudio--</option>
            <?php
            include("conexion.php");

            // Consulta para obtener las pólizas
            $sql = $conexion->query("SELECT * FROM Estudios_especializado");

            // Generar las opciones del select
            while ($resultado = $sql->fetch_assoc()) {
            echo "<option value='" . $resultado['ID'] . "'>" . $resultado['Nombre'] . " - Lps " . $resultado['Costo'] ."</option>";
            }
            ?>

      </select>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-1 mb-14">
            <label  class="text-[#111717] text-base font-medium leading-normal pb-3">intervencion Quirurgica</label>
            <select name="Intervencion" class="form-select" aria-label="Default select example">
            <option selected disabled>--Seleccionar intervencion--</option>
            <?php
            include("conexion.php");

            // Consulta para obtener las pólizas
            $sql = $conexion->query("SELECT * FROM intervencion_quirurgica");

            // Generar las opciones del select
            while ($resultado = $sql->fetch_assoc()) {
            echo "<option value='" . $resultado['ID'] . "'>" . $resultado['Observaciones'] . " - Duracion " . $resultado['Duracion'] ."H"."</option>";
            }
            ?>

      </select>
            </div>

            
            
        
            
              <div class="flex justify-center">
                <button
                    type="submit"
                    class="w-full max-w-sm rounded-xl bg-blue-600 text-white font-bold py-3 px-6 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300"
                >
                    Guardar
                </button>

        
            
        </div>
      </div>
    </div>
        </form>
        <div class="px-40 flex flex-1 justify-center py-5">
              <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <footer class="flex flex-col gap-6 px-5 py-10 text-center @container">
                  <div class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                    
                  </div>
                  <div class="flex flex-wrap justify-center gap-4">
                    <a href="#">
                      <div class="text-[#4f7296]" data-icon="GithubLogo" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                            d="M208.31,75.68A59.78,59.78,0,0,0,202.93,28,8,8,0,0,0,196,24a59.75,59.75,0,0,0-48,24H124A59.75,59.75,0,0,0,76,24a8,8,0,0,0-6.93,4,59.78,59.78,0,0,0-5.38,47.68A58.14,58.14,0,0,0,56,104v8a56.06,56.06,0,0,0,48.44,55.47A39.8,39.8,0,0,0,96,192v8H72a24,24,0,0,1-24-24A40,40,0,0,0,8,136a8,8,0,0,0,0,16,24,24,0,0,1,24,24,40,40,0,0,0,40,40H96v16a8,8,0,0,0,16,0V192a24,24,0,0,1,48,0v40a8,8,0,0,0,16,0V192a39.8,39.8,0,0,0-8.44-24.53A56.06,56.06,0,0,0,216,112v-8A58.14,58.14,0,0,0,208.31,75.68ZM200,112a40,40,0,0,1-40,40H112a40,40,0,0,1-40-40v-8a41.74,41.74,0,0,1,6.9-22.48A8,8,0,0,0,80,73.83a43.81,43.81,0,0,1,.79-33.58,43.88,43.88,0,0,1,32.32,20.06A8,8,0,0,0,119.82,64h32.35a8,8,0,0,0,6.74-3.69,43.87,43.87,0,0,1,32.32-20.06A43.81,43.81,0,0,1,192,73.83a8.09,8.09,0,0,0,1,7.65A41.72,41.72,0,0,1,200,104Z"
                          ></path>
                        </svg>
                      </div>
                    </a>
                    
                  </div>
                  <p class="text-[#4f7296] text-base font-normal leading-normal">By Alumnos IS501 </p>
                </footer>
              </div>
          </div>
  </body>
</html>


<?php
include_once("conexion.php");

// Capturar el ID enviado por la URL con el método GET
$citaMedicaID = isset($_GET['id']) ? intval($_GET['id']) : null;

if ($citaMedicaID === null) {
    die("Error: No se proporcionó un ID de cita médica válido.");
}

$fechaHora = isset($_POST['FechaHora']) ? $_POST['FechaHora'] : null;
$observacionesConsulta = isset($_POST['Obser']) ? $_POST['Obser'] : null;
$diagnosticoDescripcion = isset($_POST['Diagnostico']) ? $_POST['Diagnostico'] : null;
$severidad = isset($_POST['severidad']) ? $_POST['severidad'] : null;
$altura = isset($_POST['Altura']) && !empty($_POST['Altura']) ? floatval($_POST['Altura']) : null;
$peso = isset($_POST['Peso']) && !empty($_POST['Peso']) ? floatval($_POST['Peso']) : null;
$presion = isset($_POST['Presion']) ? $_POST['Presion'] : null;
$temperatura = isset($_POST['Temperatura']) && !empty($_POST['Temperatura']) ? floatval($_POST['Temperatura']) : null;
$recetaID = isset($_POST['receta']) ? intval($_POST['receta']) : null;
$estudioID = isset($_POST['estudio']) ? intval($_POST['estudio']) : null;
$intervencionID = isset($_POST['Intervencion']) ? intval($_POST['Intervencion']) : null;

// Iniciar una transacción para garantizar la consistencia en las tablas
$conexion->begin_transaction();
/*
echo "<pre>";
print_r([
    'CitaMedicaID' => $citaMedicaID,
    'FechaHora' => $fechaHora,
    'ObservacionesConsulta' => $observacionesConsulta,
    'DiagnosticoDescripcion' => $diagnosticoDescripcion,
    'Severidad' => $severidad,
    'Altura' => $altura,
    'Peso' => $peso,
    'Presion' => $presion,
    'Temperatura' => $temperatura,
    'RecetaID' => $recetaID,
    'EstudioID' => $estudioID,
    'IntervencionID' => $intervencionID,
]);*/


try {
   
    $sqlInsertDiagnostico = "
        INSERT INTO DIAGNOSTICO (Descripcion, Severidad)
        VALUES ('$diagnosticoDescripcion', '$severidad')
    ";
    if (!$conexion->query($sqlInsertDiagnostico)) {
        throw new Exception("Error al insertar en DIAGNOSTICO: " . $conexion->error);
    }
    $diagnosticoID = $conexion->insert_id; // ID generado para DIAGNOSTICO

    
    $pruebasDiagnosticoID = null;
    $estudioID = !empty($estudioID) ? intval($estudioID) : "NULL";
    if ($altura || $peso || $presion || $temperatura) {
        $sqlInsertPruebas = "
            INSERT INTO PRUEBAS_DIAGNOSTICO (Altura, Peso, Presion_Arterial, Temperatura, Estudios_ID)
            VALUES ($altura, $peso, '$presion', '$temperatura', $estudioID)
        ";
        if (!$conexion->query($sqlInsertPruebas)) {
            throw new Exception("Error al insertar en PRUEBAS_DIAGNOSTICO: " . $conexion->error);
        }
        $pruebasDiagnosticoID = $conexion->insert_id; // ID generado para PRUEBAS_DIAGNOSTICO
    }

    
    $intervencionID = !empty($intervencionID) ? intval($intervencionID) : "NULL";
    
    $sqlInsertConsultaMedica = "
        INSERT INTO CONSULTAS_MEDICA (Fecha_Hora, Observaciones, CITA_MEDICA_ID, DIAGNOSTICO_ID, RECETA_ID, intervencion_quirurgica_ID)
        VALUES ('$fechaHora', '$observacionesConsulta', '$citaMedicaID', '$diagnosticoID', '$recetaID', $intervencionID)
    ";
    if (!$conexion->query($sqlInsertConsultaMedica)) {
        throw new Exception("Error al insertar en CONSULTAS_MEDICA: " . $conexion->error);
    }
    $consultaMedicaID = $conexion->insert_id; // ID generado para CONSULTAS_MEDICA

    
    if ($pruebasDiagnosticoID !== null) {
        $sqlInsertConsultaPrueba = "
            INSERT INTO CONSULTAS_MEDICA_has_Pruebas_diagnostico (CONSULTAS_MEDICAS_ID, Pruebas_diagnostico_ID)
            VALUES ($consultaMedicaID, $pruebasDiagnosticoID)
        ";
        if (!$conexion->query($sqlInsertConsultaPrueba)) {
            throw new Exception("Error al insertar en CONSULTAS_MEDICA_has_PRUEBAS_DIAGNOSTICO: " . $conexion->error);
        }
    }

    
    $conexion->commit();
    echo "Consulta médica y registros asociados guardados con éxito.";
} catch (Exception $e) {
    // Revertir cambios en caso de error
    $conexion->rollback();
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conexion->close();

?>








