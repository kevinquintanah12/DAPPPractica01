# Empleados CRUD

Este proyecto es una aplicación CRUD (Crear, Leer, Actualizar, Eliminar) para gestionar empleados utilizando PHP y SQLite. La aplicación permite a los usuarios agregar, visualizar, editar y eliminar registros de empleados.

## Estructura del Proyecto

```
empleados-crud
├── src
│   ├── index.php        # Punto de entrada principal de la aplicación
│   ├── create.php       # Lógica para crear un nuevo registro de empleado
│   ├── read.php         # Recupera y muestra todos los registros de empleados
│   ├── update.php       # Permite actualizar un registro de empleado existente
│   ├── delete.php       # Maneja la eliminación de un registro de empleado
│   └── db
│       └── database.sqlite # Archivo de base de datos SQLite que almacena los registros
├── assets
│   └── styles.css       # Hojas de estilo para la aplicación
└── README.md            # Documentación del proyecto
```

## Requisitos

- PHP 7.0 o superior
- SQLite

## Instalación

1. Clona este repositorio en tu máquina local.
2. Asegúrate de tener un servidor web que soporte PHP (como Apache o Nginx).
3. Coloca el contenido del proyecto en el directorio raíz de tu servidor web.
4. Accede a `src/index.php` a través de tu navegador.

## Uso

- **Crear Empleado**: Navega a `src/create.php` para agregar un nuevo empleado.
- **Leer Empleados**: La página principal `src/index.php` mostrará todos los empleados registrados.
- **Actualizar Empleado**: Selecciona un empleado en la lista y navega a `src/update.php` para editar sus detalles.
- **Eliminar Empleado**: Desde la lista de empleados, puedes eliminar un registro seleccionando la opción correspondiente.

## Estilos

La aplicación utiliza una paleta de colores blanca, verde y azul, definida en el archivo `assets/styles.css`, para proporcionar una interfaz limpia y amigable.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas mejorar este proyecto, por favor abre un issue o envía un pull request.