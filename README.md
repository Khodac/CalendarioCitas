# ej5_Indices - Documentación del proyecto

Este proyecto es un calendario en PHP que se conecta a una API para obtener los eventos y mostrarlos en una interfaz web. El objetivo de este documento es proporcionar instrucciones claras para descargar el proyecto, configurar el entorno de desarrollo local utilizando Docker Compose y ejecutar la aplicación con éxito.

## Requisitos previos

Antes de comenzar, asegúrate de tener lo siguiente instalado en tu máquina:

- Docker Desktop
- MySQL Workbench

## Descarga del proyecto

Para descargar el proyecto, sigue los siguientes pasos:

1. Clona el repositorio desde GitHub:

git clone https://github.com/tu-usuario/ej5_Indices.git


2. Accede al directorio del proyecto:

cd ej5_Indices


## Configuración del entorno con Docker Compose

A continuación, configuraremos el entorno de desarrollo utilizando Docker Compose:

1. Abre el archivo `docker-compose.yml` en un editor de texto y asegúrate de que los siguientes parámetros coincidan con la configuración de tu base de datos MySQL:

   - `MYSQL_ROOT_PASSWORD`: Contraseña de root de MySQL.
   - `MYSQL_DATABASE`: Nombre de la base de datos (en este caso, `calendario`).
   - `MYSQL_USER`: Usuario de la base de datos.
   - `MYSQL_PASSWORD`: Contraseña del usuario de la base de datos.

2. Guarda los cambios en el archivo `docker-compose.yml`.

3. Abre una terminal y ejecuta el siguiente comando para iniciar los contenedores:

docker-compose up -d


4. Espera unos momentos hasta que los contenedores estén listos.

## Importación de la base de datos

Para importar la base de datos proporcionada en el proyecto:

1. Abre MySQL Workbench y conecta al servidor MySQL en `localhost` con el puerto y las credenciales que hayas configurado en el archivo `docker-compose.yml`.

2. Crea una nueva conexión y selecciona la base de datos "calendario".

3. Haz clic en "Server" en la barra de menú superior y selecciona "Data Import".

4. Selecciona la opción "Import from Self-Contained File" y elige el archivo `calendario.sql` proporcionado en el proyecto.

5. Haz clic en "Start Import" para importar la base de datos.

## Ejecución de la aplicación

Ahora que hemos configurado el entorno y importado la base de datos, es hora de ejecutar la aplicación:

1. Abre tu navegador web y visita la siguiente URL: [http://localhost](http://localhost)

2. Deberías ver el calendario y los eventos cargados desde la API.

¡Felicidades! Has configurado y ejecutado el proyecto "ej5_Indices" de calendario en PHP utilizando Docker Compose y MySQL Workbench en tu entorno local.

## Participantes del proyecto:

- Gladys Guanin.
- Jose Cabanillas.
- Alejandro Calquin.
- Pablo Caballero.



