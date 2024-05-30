# ONG Animales - Proyecto Laravel

## Tabla de Contenidos
1. [Descripción](#descripción)
2. [Instalación](#instalación)
3. [Configuración](#configuración)
4. [Base de Datos](#base-de-datos)
5. [Tecnologías Utilizadas](#tecnologías-utilizadas)
6. [Módulos y APIs](#módulos-y-apis)
7. [Credenciales de Usuarios de Ejemplo](#credenciales-de-usuarios-de-ejemplo)
8. [Licencia](#licencia)

## Descripción
Este proyecto es una aplicación web desarrollada con Laravel para gestionar una ONG de animales. La aplicación permite administrar información sobre los animales, gestionar adopciones, generar reportes, y más.

## Instalación
Para instalar el proyecto, sigue los siguientes pasos:

1. Clonar el repositorio:
    ```sh
    git clone https://github.com/marcbastias/Ong.git
    ```

2. Navegar al directorio del proyecto:
    ```sh
    cd Ong
    ```

3. Instalar las dependencias de Composer:
    ```sh
    composer install
    ```

4. Copiar el archivo de ejemplo de entorno:
    ```sh
    cp .env.example .env
    ```

5. Configurar las variables de entorno en el archivo `.env` (ver sección [Configuración](#configuración)).

6. Ejecutar las migraciones de la base de datos:
    ```sh
    php artisan migrate:refresh --seed
    ```

7. Iniciar el servidor de desarrollo:
    ```sh
    php artisan serve
    ```

## Configuración
Edita el archivo `.env` con las configuraciones de tu entorno local. A continuación, se muestran las configuraciones más importantes:

```env
APP_NAME="ONG Animales"
APP_ENV=local
APP_KEY=base64:xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ong_animales
DB_USERNAME=root
DB_PASSWORD=secret
Base de Datos
El proyecto utiliza MySQL como base de datos.

Migraciones
Para crear las tablas necesarias en la base de datos, ejecuta las migraciones con el siguiente comando:


php artisan migrate
Archivos SQL
Si tienes un archivo .sql con datos de ejemplo o una estructura específica, puedes importarlo utilizando la herramienta de tu elección (por ejemplo, phpMyAdmin o la línea de comandos de MySQL).


mysql -u root -p ong_animales < database/backup.sql
Tecnologías Utilizadas
Laravel 8.x: Framework principal para el desarrollo backend.
MySQL: Sistema de gestión de bases de datos.
Blade: Motor de plantillas utilizado en Laravel.
Composer: Administrador de dependencias de PHP.
GuzzleHTTP: Cliente HTTP para consumir APIs.
Módulos y APIs
Gestión de Animales: Módulo para añadir, editar y eliminar registros de animales.
Adopciones: Módulo para gestionar adopciones.
Reportes: Generación y exportación de reportes en PDF utilizando barryvdh/laravel-dompdf.
Autenticación y Autorización: Gestión de usuarios y roles.
Credenciales de Usuarios de Ejemplo
A continuación se presentan las credenciales de usuarios de ejemplo con distintos roles para facilitar las pruebas.

Administrador
Usuario: marcbastias@gmail.com
Contraseña: password

Usuario Regular (se tiene que registrar)
Usuario: user@example.com
Contraseña: password

Licencia
Este proyecto está licenciado bajo la Licencia MIT. Para más detalles, consulta el archivo LICENSE.