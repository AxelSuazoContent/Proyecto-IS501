# Expediente Médico: Sistema de Información de Pacientes

Repositorio: https://github.com/AxelSuazoContent/Proyecto-IS501

![Status](https://img.shields.io/badge/status-development-blue) ![License](https://img.shields.io/github/license/AxelSuazoContent/Proyecto-IS501)

---

## 🎥 Demo en Video
<!-- Inserta aquí el enlace al video de demostración -->
[![Demo Expediente Médico](https://img.youtube.com/vi/VIDEO_ID/0.jpg)](https://youtu.be/VIDEO_ID)

---

## 📖 Descripción General
Este proyecto implementa un **sistema de información de pacientes** en una institución de salud. Permite realizar operaciones CRUD sobre pacientes, citas, médicos y historiales médicos, así como visualizar prototipos de interfaz y pruebas en HTML.

**Principales funcionalidades:**
- Registro y edición de pacientes.
- Programación y seguimiento de citas médicas.
- Gestión de historiales y diagnósticos.
- Visualización de prototipos UI y vistas web.

---

## 📂 Estructura de Carpetas
```
Proyecto-IS501/
├─ .vscode/             # Configuración del editor VSCode
├─ Asset/               # Imágenes y recursos estáticos
├─ Crud/                # Scripts SQL y migraciones para la BD
│  └─ schema.sql        # Esquema de tablas (pacientes, citas, médicos, historiales)
├─ Prototipos/          # Wireframes y diseños de interfaz
├─ html_prueba/         # Páginas de prueba y prototipos en HTML
├─ php/                 # Lógica backend en PHP
│  ├─ config.php        # Archivo de configuración (credenciales de BD)
│  ├─ controllers/      # Controladores para rutas y operaciones CRUD
│  ├─ models/           # Modelos de datos (Patient.php, Appointment.php, etc.)
│  └─ views/            # Plantillas y vistas PHP
├─ vistas/              # Vistas frontend (HTML/CSS adicionales)
└─ README.md            # Documentación del proyecto
```

---

## 🛠️ Tecnologías Utilizadas
- **Lenguaje:** PHP 7.x
- **Frontend:** HTML5, CSS3
- **Base de datos:** MySQL / MariaDB
- **Servidor web:** Apache o Nginx
- **Editor recomendado:** VSCode

---

## 🚀 Instalación y Configuración
1. **Clona el repositorio**
   ```bash
   git clone https://github.com/AxelSuazoContent/Proyecto-IS501.git
   cd Proyecto-IS501
   ```
2. **Configura tu servidor**
   - Copia la carpeta `Proyecto-IS501` a tu directorio de servidor web (`htdocs` en XAMPP o `www` en Wamp).
3. **Crea la base de datos**
   - Accede a tu gestor MySQL (phpMyAdmin o CLI) y crea la base de datos `is501_db`.
   - Importa el script de esquema:
     ```sql
     USE is501_db;
     SOURCE Crud/schema.sql;
     ```
4. **Ajusta las credenciales**
   - Abre `php/config.php` y modifica las constantes con tu host, usuario y contraseña de base de datos.
5. **Inicia el proyecto**
   - Arranca Apache y MySQL.
   - Navega en tu navegador a: `http://localhost/Proyecto-IS501/php/index.php`

---

## 🔧 Uso y Ejemplos de Rutas
- **Listar pacientes:**
  ```bash
  GET /php/controllers/patientController.php?action=list
  ```
- **Crear paciente:**
  Envía el formulario en `php/views/patient_form.php`.
- **Programar cita:**
  Llama a `controllers/appointmentController.php?action=create` con los parámetros necesarios.

> Explora los controladores en `php/controllers` para ver todas las acciones y rutas disponibles.

---

## 📈 Prototipos y Pruebas
- **Prototipos UI:** Carpeta `Prototipos/` con wireframes y mockups.
- **Vistas estáticas:** Carpeta `html_prueba/` con páginas HTML para validar diseño.

---

## 🤝 Contribuciones
¡Se aceptan sugerencias! Abre un _issue_ para reportar bugs o solicitar nuevas funcionalidades. Los _pull requests_ son bienvenidos.

## 📄 Licencia
MIT License

---

_Desarrollado por Axel Gerónimo (axelgeronimo0@gmail.com)_
