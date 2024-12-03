<?php

    if (isset($_POST['enviar'])) {
        // Recoger el nombre completo del formulario
        $nombreCompleto = trim($_POST['nombre']); // Elimina espacios extra al inicio y al final
        // Separar el nombre completo en palabras
        $partesNombre = explode(" ", $nombreCompleto);
    
        // Inicializar las variables de nombre y apellidos
        $pnombre = $partesNombre[0] ?? ''; // Primer nombre
        $snombre = $partesNombre[1] ?? ''; // Segundo nombre (si existe)
        $papellido = $partesNombre[2] ?? ''; // Primer apellido (si existe)
        $sapellido = $partesNombre[3] ?? ''; // Segundo apellido (si existe)



    if (isset($_POST['sexo']) && $_POST['sexo'] !== "--Seleccionar--") 
        // Capturar el valor del select
        $sexo = $_POST['sexo'];
    $Identidad = $_POST['Num_identidad'];
    $correo = $_POST['Correo'];
    $telefono = $_POST['telefono'];
    $poliza = $_POST['tipopoliza'];
    $telefono = $_POST['tel_emergencia'];


    $insertar = "INSERT INTO Paciente (sexo) VALUES ('$sexo')";