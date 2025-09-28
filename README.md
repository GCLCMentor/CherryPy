# CherryPy Online Python IDE

CherryPy es un Entorno de Desarrollo Integrado (IDE) en línea, diseñado específicamente para entornos educativos. Permite a los estudiantes escribir, ejecutar y guardar código Python directamente desde el navegador, eliminando la necesidad de instalar software local. El proyecto está construido con PHP en el backend y JavaScript, junto con la librería Skulpt, para la emulación de Python en el frontend.

## ✨ Características Principales

* **Editor de Código Avanzado**: Utiliza CodeMirror para ofrecer resaltado de sintaxis, numeración de líneas y temas personalizables.
* **Ejecución de Python en el Navegador**: Gracias a la librería Skulpt, el código Python se ejecuta localmente en el navegador, proporcionando una respuesta instantánea.
* **Sistema de Guardado Inteligente**: Los archivos se guardan con un nombre estable y predecible (`Curso_Estudiante_Ejercicio.py`).
* **Versionado Automático**: Cada vez que se guarda un archivo, la versión anterior se mueve automáticamente a una carpeta de `backups` con una marca de tiempo, evitando la pérdida de trabajo.
* **Compartir y Descargar**: Los estudiantes pueden compartir un enlace único a su trabajo o descargar sus archivos `.py` una vez que han sido guardados.
* **Lógica de "Guardado Obligatorio"**: La aplicación exige guardar los cambios recientes antes de poder compartir o descargar el código, asegurando que el archivo en el servidor siempre esté actualizado.
* **Autenticación de Estudiantes**: Integrado con un sistema de sesión para identificar al estudiante que está trabajando.

## 🛠️ ¿Cómo Funciona?

El proyecto utiliza una arquitectura cliente-servidor simple pero robusta:

* **Frontend**:
    * `index.php`: Es la interfaz principal construida con HTML, CSS y JavaScript.
    * **CodeMirror.js**: Proporciona el editor de texto enriquecido.
    * **Skulpt.js**: Es el "traductor" que toma el código Python del editor y lo ejecuta como si fuera JavaScript en el navegador.

* **Backend (PHP)**:
    * `save_code.php`: Recibe el código y el nombre del archivo desde el frontend. Se encarga de la lógica de versionado (mover el archivo antiguo a `backups`) y de guardar la nueva versión en el directorio principal.
    * `get_code.php`: Lee un archivo `.py` del servidor de forma segura y lo devuelve al frontend para ser cargado en el editor.
    * `auth_check.php`: (Asumido) Maneja la sesión del usuario para asegurar que solo los estudiantes autenticados puedan acceder.

## 📁 Estructura de Archivos

La estructura de carpetas y archivos clave es la siguiente:

```text
/cherrypy/
├── index.php           # Interfaz principal de la aplicación
├── save_code.php       # Script para guardar y versionar código
├── get_code.php        # Script para cargar código guardado
│
├── python_exercises/   # Carpeta donde se guardan los archivos principales
│   └── backups/        # Carpeta para las copias de seguridad automáticas
│
├── css/                # Hojas de estilo
├── js/                 # Archivos JavaScript adicionales
└── theme/              # Temas para el editor CodeMirror
```


## 🚀 Cómo Usar

1.  **Iniciar**: El estudiante accede a la URL y es validado por el sistema de autenticación.
2.  **Identificarse**: Selecciona su curso y escribe el nombre del ejercicio en los campos correspondientes. El nombre del estudiante se carga automáticamente desde la sesión.
3.  **Codificar**: Escribe su código Python en el editor.
4.  **Ejecutar**: Usa el botón **Run** para ver el resultado de su código en la consola de salida.
5.  **Guardar**: Presiona **Save** para guardar su trabajo. El sistema crea un archivo con nombre estable y genera una copia de seguridad de la versión anterior si existía.
6.  **Compartir/Descargar**: Una vez guardado, los botones **Share URL** y **Download** se activan para permitirle compartir un enlace directo a su archivo o descargarlo.
