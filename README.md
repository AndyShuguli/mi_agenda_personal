# Mi Agenda Personal

## Descripción del proyecto

Mi Agenda Personal es una aplicación web desarrollada en PHP y MySQL que permite el registro de usuarios, inicio de sesión y administración de contactos personales. Cada usuario puede gestionar únicamente sus propios contactos mediante el uso de sesiones y controles de acceso.

## Tecnologías utilizadas

- PHP
- MySQL
- HTML
- XAMPP
- phpMyAdmin
- Visual Studio Code

## Requisitos para su ejecución

- XAMPP instalado
- Apache activo
- MySQL activo
- Navegador web
- PHP 8 o superior

## Pasos para instalar la aplicación

1. Copiar la carpeta del proyecto en C:\xampp\htdocs.
2. Iniciar Apache y MySQL desde XAMPP.
3. Importar el archivo mi_agenda_personal.sql desde phpMyAdmin.
4. Abrir el navegador web.
5. Acceder a la dirección:
   http://localhost/mi_agenda_personal/login.php

## Funcionalidades

- Registro de usuarios.
- Inicio de sesión.
- Administración de sesiones.
- Creación de contactos.
- Consulta de contactos.
- Edición de contactos.
- Eliminación de contactos.
- Confirmación antes de eliminar contactos.
- Protección de contraseñas mediante password_hash().
- Verificación de credenciales mediante password_verify().
- Restricción de acceso a contactos de otros usuarios.

## Base de datos

La base de datos utilizada es:

mi_agenda_personal

### Tablas principales

- usuarios
- contactos_personales
