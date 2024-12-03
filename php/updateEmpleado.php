<<<<<<< HEAD
=======

>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Manrope%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Pagina Editar Paciente</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
<<<<<<< HEAD
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
            </div>
       
        </div>
        <a href="inicio.php">Inicio</a>
        <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-16"
              
            ><img src="../Asset/logos-UNAH-11.png" alt="Descripción de la imagen"></div>
    </nav>
</header>
=======
        body {
            overflow-x: hidden;
            font-family: 'Inter', 'Noto Sans', sans-serif;
            background-color: #f5f5f5;
        }

    header {
        background-color: inherit; /* Hereda el color del body */
    }
    

    nav a {
        font-size: 1.30rem; 
    }
    </style>
    <title>Empleados</title>
</head>
<body>
    <div class="relative flex min-h-screen flex-col bg-slate-50">
    <header class="flex items-center justify-between border-b px-20 py-5 shadow-md">

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


        <nav class="flex gap-6">
            
            <a href="Empleado.php" class="font-semibold text-gray-700">Empleados</a>
            <a href="#" class="font-semibold text-gray-700">Citas</a>
            <a href="#" class="font-semibold text-gray-700">Historial Médico</a>
          
            <a href="inicio.php" class="font-semibold text-gray-700">Inicio</a>

            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-12"
              style="
                background-image: url('https://cdn.usegalileo.ai/stability/b8951bbb-4539-4798-bee6-7a9bc44b9ce9.png');
              "
            ></div>
        </nav>
        
    </header>
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
        
    <div class="px-5 flex justify-center items-center py-5 bg-gray-100">
      <div class="layout-content-container bg-gray-200 p-10 rounded-lg shadow-lg flex flex-col w-full max-w-[512px]">
        <div class="flex flex-wrap justify-between gap-3 mb-6">
            <p class="text-[#0e141b] tracking-light text-[48px] font-extrabold leading-tight text-center w-full">
                Editar Empleados
            </p>
        </div>
<<<<<<< HEAD

        <!-- Formulario -->
        <form method="POST"  autocomplete="off">
=======
        <div><br><button type="button"     class="w-full max-w-sm rounded-xl bg-white-600 text-black font-bold py-3 px-6 hover:bg-white-800 focus:ring-4 focus:ring-blue-300"
        onclick="location.href='Empleado.php'">Volver</button></div><br>

        <!-- Formulario -->
        <form id="formulario1" method="POST">
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6

        <?php
include_once("conexion.php");

// Sanitizamos el parámetro 'id' para evitar inyección SQL
$id = intval($_REQUEST['id']);

// Consulta con INNER JOIN para obtener los datos relacionados
$sql = "
SELECT 
    p.*, -- Datos de la tabla Persona
    e.Gerente_ID,
    e.Fecha_Contratacion, -- Fecha de contratación del empleado
    t.Numero, -- Número de teléfono relacionado con la persona
    eht.Area_Trabajo_ID, 
    at.Descripcion, -- Descripción del área de trabajo
    eht.Fecha_Hora_Asignacion, 
    eht.Fecha_Hora_Fin, -- Datos de la tabla empleado_has_area_trabajo
    ehc.CARGO_ID, 
    c.Nombre, -- Nombre del cargo
    ehc.Fecha_Inicio, 
    ehc.Fecha_Fin, -- Datos de la tabla empleado_has_cargo
    es.Descripcion, -- Descripción de la especialidad
    es.Licencia -- Licencia de la especialidad
FROM 
    Persona p
LEFT JOIN empleado e ON p.ID = e.Persona_ID -- Relación con la tabla empleado
LEFT JOIN telefono t ON p.ID = t.Persona_ID -- Relación con la tabla teléfono
LEFT JOIN empleado_has_area_trabajo eht ON e.ID = eht.EMPLEADO_ID -- Relación con áreas de trabajo
LEFT JOIN Area_Trabajo at ON eht.Area_Trabajo_ID = at.ID -- Relación con la tabla Área de Trabajo
LEFT JOIN empleado_has_cargo ehc ON e.ID = ehc.EMPLEADO_ID -- Relación con cargos
LEFT JOIN CARGO c ON ehc.CARGO_ID = c.ID -- Relación con la tabla Cargo
LEFT JOIN ESPECIALIDAD es ON e.ID = es.ID -- Relación con la tabla Especialidad
WHERE 
    p.ID = $id";


// Ejecutamos la consulta
$resultado = $conexion->query($sql);
// Verificamos si hay resultados
if ($resultado && $resultado->num_rows > 0) {
    // Obtenemos los datos
    $row = $resultado->fetch_assoc();
    // Muestra los datos para debug o procesarlos
} else {
    echo "Noo se encontraron datos para el ID proporcionado.";
}
?>



<input type="hidden" name="PersonaID" value="<?php echo $row['ID']; ?>">


            <input type="hidden" name="EmpleadoID" />
            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
                <label class="flex flex-col w-full">
                    <p class="text-[#111717] text-base font-medium leading-normal pb-2" >Nombre Completo</p>
                    <input
                        name="NombreCompleto"
                        placeholder="Nombre Completo"
                        class="form-input flex w-full resize-none rounded-xl border border-gray-400 bg-white focus:ring-2 focus:ring-blue-500 h-14 placeholder-gray-500 p-4 text-base" 
                        value="<?php echo $row['PNombre'] . ' ' . $row['SNombre'] . ' ' . $row['PApellido'] . ' ' . $row['SApellido']; ?>"
                     />

                    
                </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Fecha De Nacimiento</p>
                <input
                  name="FechaNacimiento"
                  type="text"
                  placeholder="año-mes-dia"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  value="<?php echo $row['Fecha_Nacim']?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-6 mb-7">
              <p class="text-[#111717] text-base font-medium leading-normal pb-0.3">Sexo</p>
              <label>
                <input type="radio" name="sexo" value="H" <?php echo ($row['sexo'] === 'H') ? 'checked' : ''; ?>/>
                Hombre
              </label>
              <label>
                <input type="radio" name="sexo" value="M" <?php echo ($row['sexo'] === 'M') ? 'checked' : ''; ?> />
                Mujer
              </label>  
              <label>
                <input type="radio" name="sexo" value="O" <?php echo ($row['sexo'] === 'O') ? 'checked' : ''; ?>  />
                Pref. No Decir
              </label>
            </div>

        
            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Num. Identidad</p>
                <input
                  name="Identidad"
                  placeholder="xxxx-xxxx-xxxxx"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  value="<?php echo $row['Identidad']?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Num. RTN</p>
                <input
                  name="RTN"
                  placeholder="xxxx-xxxx-xxxxxx"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                 value="<?php echo $row['RTN']?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Num. De Telefono</p>
                <input
                  name="NumeroTelefono"
                  placeholder="xxxx-xxxx"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                 value="<?php echo $row['Numero']?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
                <label class="flex flex-col w-full">
                    <p class="text-[#111717] text-base font-medium leading-normal pb-2">Correo</p>
                    <input
                        name="correo"
                        type="email"
                        placeholder="ejemplo@correo.com"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                        value="<?php echo $row['correo']?>"
                    />
                </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
  <label class="flex flex-col min-w-40 flex-1">
    <p class="text-[#111717] text-base font-medium leading-normal pb-2">Direccion</p>
    <textarea
      name="Direccion"
      placeholder="Direccion exacta"
      class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
    ><?php echo htmlspecialchars($row['Direccion']); ?></textarea>
  </label>
</div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Num. De Emergencia</p>
                <input
                name = "Emergencia"
                  placeholder="xxxxxxxxxxxxxxx"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  value="<?php echo $row['Numero_Emergencia']?>"
                  
                />
              </label>
            </div>
            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
            <label  class="text-[#111717] text-base font-medium leading-normal pb-2">&nbsp&nbsp&nbsp&nbspCargo &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <select name="cargo" class="form-select" aria-label="Default select example" >
        <option selected disabled>--Seleccionar Cargo--</option>
        <?php
        include("conexion.php");

        
        $empleado_id = $_GET['id'];

        
        $consulta_cargo = $conexion->query("
            SELECT c.ID AS Cargo_ID, c.Nombre AS Cargo_Nombre
            FROM empleado_has_cargo ehc
            JOIN cargo c ON ehc.CARGO_ID = c.ID
            WHERE ehc.EMPLEADO_ID = $empleado_id AND (ehc.Fecha_Fin IS NULL OR ehc.Fecha_Fin > NOW())
            LIMIT 1
        ");

        
        $cargo_actual = $consulta_cargo->fetch_assoc();
        $cargo_seleccionado = $cargo_actual['Cargo_ID'] ?? null;

        // Consulta para obtener todos los cargos
        $sql = $conexion->query("SELECT * FROM cargo");

        // Generar las opciones del select
        while ($resultado = $sql->fetch_assoc()) {
            $selected = ($resultado['ID'] == $cargo_seleccionado) ? 'selected' : '';
            echo "<option value='" . $resultado['ID'] . "' $selected>" . $resultado['Nombre'] . "</option>";
        }
        ?>



      </select>
            </div>
            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Fecha Inicio de cargo</p>
                <input
                  name="FechaInicio"
                  type="text"
                  placeholder="año-mes-dia"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  value="<?php echo $row['Fecha_Inicio']?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Fecha fin de cargo</p>
                <input
                  name="Fechafin"
                  type="text"
                  placeholder="año-mes-dia"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  value="<?php echo $row['Fecha_Fin']?>"
                />
              </label>
            </div>
            <div class="flex max-w-full flex-wrap items-end gap-1 mb-3">
            <label  class="text-[#111717] text-base font-medium leading-normal pb-0.3">Area Trabajo</label>
            <select name="Area" class="form-select" aria-label="Default select example">
        <option selected disabled>--Seleccionar Area_Trabajo--</option>
        <?php
        include("conexion.php");

        // ID del empleado que deseas modificar
        $empleado_id = $_GET['id'];

        // Consulta para obtener el área de trabajo actual del empleado
        $consulta_area = $conexion->query("
            SELECT at.ID AS Area_ID, at.Descripcion AS Area_Descripcion
            FROM empleado_has_area_trabajo eht
            JOIN area_trabajo at ON eht.Area_Trabajo_ID = at.ID
            WHERE eht.EMPLEADO_ID = $empleado_id 
              AND (eht.Fecha_Hora_Fin IS NULL OR eht.Fecha_Hora_Fin > NOW())
            LIMIT 1
        ");

        // Verificar si se obtuvo el área de trabajo actual del empleado
        if ($consulta_area && $consulta_area->num_rows > 0) {
            $area_actual = $consulta_area->fetch_assoc();
            $area_seleccionada = $area_actual['Area_ID'];
        } else {
            $area_seleccionada = null; // Si no hay área asignada
        }

        // Consulta para obtener todas las áreas de trabajo
        $sql_areas = $conexion->query("SELECT * FROM area_trabajo");

        // Generar las opciones del select de área de trabajo
        while ($resultado = $sql_areas->fetch_assoc()) {
            $selected = ($resultado['ID'] == $area_seleccionada) ? 'selected' : '';
            echo "<option value='" . $resultado['ID'] . "' $selected>" . $resultado['Descripcion'] . "</option>";
        }
        ?>

      </select>
            </div>
            <div class="flex max-w-full flex-wrap items-end gap-4 mb-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Fecha y Hora Inicio Area</p>
                <input
                  name="Fechaarea"
                  type="text"
                  placeholder="año-mes-dia xx:xx:xx"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  value="<?php echo htmlspecialchars($row['Fecha_Hora_Fin']); ?>"
                />
              </label>
            </div>

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-10">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Fecha y Hora Fin Area</p>
                <input
                  name="Fechaarea2"
                  type="text"
                  placeholder="año-mes-dia xx:xx:xx"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  value="<?php echo htmlspecialchars($row['Fecha_Hora_Fin']); ?>"
                />
              </label>
            </div>

            


              <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
            <label  class="text-[#111717] text-base font-medium leading-normal pb-2">Especialidad</label>
            <select name="Especialidad" class="form-select" aria-label="Default select example">
        <option selected disabled>--Seleccionar Especialidad--</option>\
        <?php
        include("conexion.php");

        
        $empleado_id = $_GET['id'];

        
        $consulta_especialidad = $conexion->query("
        SELECT es.ID AS Especialidad_ID, es.Descripcion AS Especialidad_Descripcion
        FROM empleado_has_especialidad ehe
        JOIN especialidad es ON ehe.ESPECIALIDAD_ID = es.ID
        WHERE ehe.EMPLEADO_ID = $empleado_id
        LIMIT 1
    ");

        
    if ($consulta_especialidad && $consulta_especialidad->num_rows > 0) {
      $especialidad_actual = $consulta_especialidad->fetch_assoc();
      $especialidad_seleccionada = $especialidad_actual['Especialidad_ID'];
  } else {
      $especialidad_seleccionada = null; // Si no hay especialidad asignada
  }

       
        $sql_especialidades = $conexion->query("SELECT * FROM especialidad");

        while ($resultado = $sql_especialidades->fetch_assoc()) {
          $selected = ($resultado['ID'] == $especialidad_seleccionada) ? 'selected' : '';
          echo "<option value='" . $resultado['ID'] . "' $selected>" . $resultado['Descripcion'] . "</option>";
      }
        ?>

      </select>
            </div>
            

            <div class="flex max-w-full flex-wrap items-end gap-4 mb-4">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#111717] text-base font-medium leading-normal pb-2">Fecha De Contratacion</p>
                <input
                  name="FechaContrata"
                  type="text"
                  placeholder="año-mes-dia"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111717] focus:outline-0 focus:ring-0 border border-black bg-white focus:border-black h-14 placeholder:text-[#648783] p-[15px] text-base font-normal leading-normal"
                  value="<?php echo $row['Fecha_Contratacion']?>"
                />
              </label>
            </div>

            

            <div class="flex max-w-full flex-wrap items-end gap-6 mb-7">
              <p class="text-[#111717] text-base font-medium leading-normal pb-0.3">¿es Gerente?</p>
              <label>
                <input type="radio" name="Gerente" value="2" <?php echo ($row['Gerente_ID'] === '2') ? 'checked' : ''; ?>/>
                Si
              </label>
              <label>
                <input type="radio" name="Gerente" value="1" <?php echo ($row['Gerente_ID'] === '1') ? 'checked' : ''; ?> />
                No
              </label>
            </div>

<<<<<<< HEAD
              <div class="flex justify-center">
               
                <button 
                    type="submit"
                    class="w-full max-w-sm rounded-xl bg-blue-600 text-white font-bold py-3 px-6 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300"
                
                >
                
                    Guardar
                </button>
   
=======
            <button
            
    id="guardar"
    type="submit"
    class="w-full max-w-sm rounded-xl bg-blue-600 text-white font-bold py-3 px-6 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300"
    >
    Guardar
</button>



>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6


            
        </div>
      </div>
    </div>
<<<<<<< HEAD
    
  </body>
  <div class="px-40 flex flex-1 justify-center py-5">
=======
    <div class="px-40 flex flex-1 justify-center py-5">
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
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
<<<<<<< HEAD
                    
=======
                    <a href="#">
                      <div class="text-[#4f7296]" data-icon="LinkedinLogo" data-size="24px" data-weight="regular">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                          <path
                            d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24Zm0,192H40V40H216V216ZM96,112v64a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0Zm88,28v36a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140ZM100,84A12,12,0,1,1,88,72,12,12,0,0,1,100,84Z"
                          ></path>
                        </svg>
                      </div>
                    </a>
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
                  </div>
                  <p class="text-[#4f7296] text-base font-normal leading-normal">By Alumnos IS501 </p>
                </footer>
              </div>
          </div>
<<<<<<< HEAD
=======
  </body>
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
</html>



<<<<<<< HEAD




<?php

=======
<?php
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
include_once("conexion.php");

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los datos enviados desde el formulario
    $PersonaID = $_POST['PersonaID'] ?? null; // ID de la persona (enviada desde el formulario si existe)
    $NombreCompleto = $_POST['NombreCompleto'];
    $Direccion = $_POST['Direccion'];
    $correo = $_POST['correo'];
    $sexo = $_POST['sexo'];
    $Identidad = $_POST['Identidad'];
    $RTN = $_POST['RTN'];
    $NumeroTelefono = $_POST['NumeroTelefono'];
    $FechaNaci = $_POST['FechaNacimiento'];
    $Cargo = $_POST['cargo']; 
    $Especi = $_POST['Especialidad'] ?? null; 
    $FehaContrata = $_POST['FechaContrata'];
    $FechaInicio = $_POST['FechaInicio']; 
    $Fechafin = $_POST['Fechafin']; 
    $Gerente = $_POST['Gerente'];
    $Num_emergencia = $_POST['Emergencia']; 
    $Area = $_POST['Area'];
    $FechaHoraArea = $_POST['Fechaarea'];
    $FechaHoraArea2 = $_POST['Fechaarea2'];

    // Dividir el nombre completo en partes
    $nombrePartes = explode(' ', $NombreCompleto);
    $PNombre = $nombrePartes[0] ?? '';
    $SNombre = $nombrePartes[1] ?? '';
    $PApellido = $nombrePartes[2] ?? '';
    $SApellido = $nombrePartes[3] ?? '';

<<<<<<< HEAD
    


=======
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
    if ($PersonaID) {
        // Si existe PersonaID, actualiza los registros
        $sqlUpdatePersona = "UPDATE PERSONA 
                             SET PNombre = '$PNombre', SNombre = '$SNombre', PApellido = '$PApellido', SApellido = '$SApellido',
                                 Direccion = '$Direccion', correo = '$correo', sexo = '$sexo', Identidad = '$Identidad', 
                                 RTN = '$RTN', Fecha_Nacim = '$FechaNaci', Numero_Emergencia = '$Num_emergencia'
                             WHERE ID = '$PersonaID'";
<<<<<<< HEAD

=======
        
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
        if (mysqli_query($conexion, $sqlUpdatePersona)) {
            // Actualizar el número de teléfono
            $sqlUpdateTelefono = "UPDATE TELEFONO 
                                  SET Numero = '$NumeroTelefono'
                                  WHERE Persona_ID = '$PersonaID'";
            if (!mysqli_query($conexion, $sqlUpdateTelefono)) {
                echo "Error al actualizar TELEFONO: " . mysqli_error($conexion);
            }
<<<<<<< HEAD
            
            $sqlGetEmpleadoId = "SELECT ID FROM EMPLEADO WHERE Persona_ID = '$PersonaID'";


            $result = mysqli_query($conexion, $sqlGetEmpleadoId);


              if ($row = mysqli_fetch_assoc($result)) {
              $empleadoId = $row['ID']; // Guardamos el empleadoId en la variable
              } else {
  
            die("No se encontró un empleado con el Persona_ID proporcionado.");
              }
        
            

            // Actualizar información del empleado
            $sqlUpdateEmpleado = "UPDATE EMPLEADO 
            SET Fecha_Contratacion = '$FehaContrata', Gerente_ID = '$Gerente'
            WHERE ID = '$empleadoId'";

            if (mysqli_query($conexion, $sqlUpdateEmpleado)) {
            echo "Empleado actualizado correctamente.";
            } else {
            echo "Error al actualizar empleado: " . mysqli_error($conexion);
            }
=======

            // Actualizar información del empleado
            $sqlUpdateEmpleado = "UPDATE EMPLEADO 
                                  SET Fecha_Contratacion = '$FehaContrata', Gerente_ID = '$Gerente'
                                  WHERE Persona_ID = '$PersonaID'";
            if (mysqli_query($conexion, $sqlUpdateEmpleado)) {
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6

                // Actualizar cargo
                $sqlUpdateCargo = "UPDATE EMPLEADO_has_CARGO 
                                   SET CARGO_ID = '$Cargo', Fecha_Inicio = '$FechaInicio', Fecha_Fin = '$Fechafin'
<<<<<<< HEAD
                                   WHERE EMPLEADO_ID = '$empleadoId'";
=======
                                   WHERE EMPLEADO_ID = '$PersonaID'";  
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
                if (!mysqli_query($conexion, $sqlUpdateCargo)) {
                    echo "Error al actualizar EMPLEADO_has_CARGO: " . mysqli_error($conexion);
                }

                // Actualizar área de trabajo
                $sqlUpdateArea = "UPDATE empleado_has_area_trabajo 
                                  SET Area_Trabajo_ID = '$Area', Fecha_Hora_Asignacion = '$FechaHoraArea', Fecha_Hora_Fin = '$FechaHoraArea2'
<<<<<<< HEAD
                                  WHERE EMPLEADO_ID = '$empleadoId'";
=======
                                  WHERE EMPLEADO_ID = '$PersonaID'";  
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
                if (!mysqli_query($conexion, $sqlUpdateArea)) {
                    echo "Error al actualizar empleado_has_area_trabajo: " . mysqli_error($conexion);
                }

                // Actualizar especialidad (si aplica)
                if (!empty($Especi)) {
<<<<<<< HEAD
                    $sqlUpdateEspecialidad = "UPDATE EMPLEADO_has_ESPECIALIDAD 
                                              SET ESPECIALIDAD_ID = '$Especi'
                                              WHERE EMPLEADO_ID = '$empleadoId'";
=======
                  
                    $sqlUpdateEspecialidad = "UPDATE EMPLEADO_has_ESPECIALIDAD 
                                              SET ESPECIALIDAD_ID = '$Especi'
                                              WHERE EMPLEADO_ID = '$PersonaID'"
                                              ;  
                                              
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
                    if (!mysqli_query($conexion, $sqlUpdateEspecialidad)) {
                        echo "Error al actualizar EMPLEADO_has_ESPECIALIDAD: " . mysqli_error($conexion);
                    }
                }

<<<<<<< HEAD
                
=======
               // Aquí puedes hacer la redirección a otra página
               
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
            } else {
                echo "Error al actualizar EMPLEADO: " . mysqli_error($conexion);
            }
        } else {
            echo "Error al actualizar PERSONA: " . mysqli_error($conexion);
        }
    } else {
        echo "El ID de la persona no se proporcionó.";
    }
<<<<<<< HEAD
  
=======
}
>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
?>





<<<<<<< HEAD
=======



>>>>>>> 5b02995cb5026e6892669304c82130ba6344e9c6
