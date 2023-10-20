# TicketAPI

TicketAPI es una API de gestión de tickets desarrollada en Laravel. Permite la creación, recuperación, actualización y eliminación de tickets, y proporciona funcionalidades de paginación y filtrado. La API es accesible a través de HTTP RESTful.

## Requisitos

Asegúrate de tener las siguientes herramientas instaladas antes de ejecutar la aplicación:

- PHP(PHP 8.1.13 (cli), Zend Engine v4.1.13)
- Composer(Composer version 2.5.0)
- Laravel (Laravel Framework 10.28.0)
- Servidor web (por ejemplo, Apache(2.4) o Nginx)
- Base de datos (por defecto, se utiliza MySQL(8.0.31))
- Node (v19.3.0 si es necesario)

## Instalación

1. Clona el repositorio:

   ```bash
   git clone https://github.com/benandperez/laravelApi.git
   - cd laravelApi
1. Instala las dependencias de Composer:
   - composer install
2. Crea el archivo de configuración de entorno:
   - cp .env.example .env
3. Configura la base de datos en el archivo .env:
   - DB_CONNECTION=mysql
   - DB_HOST=127.0.0.1
   - DB_PORT=3306
   - DB_DATABASE=nombre_de_tu_base_de_datos
   - DB_USERNAME=usuario_de_la_base_de_datos
   - DB_PASSWORD=contraseña_de_la_base_de_datos
4. crear DB por comando si tienes linux o MAC:
    - mysql -uroot -p - e "CREATE DATABASE nombre_de_tu_base_de_datos"
5. Genera una clave de aplicación (Si es necesario):
   - php artisan key:generate
6. Ejecuta las migraciones para crear las tablas de la base de datos:
   - php artisan migrate
7. Inicia el servidor de desarrollo de Laravel:
   - php artisan serve
8. Crear usuarios por defecto para que la App Funcione mejor:
   - php artisan db:seed --class=UserClientSeeder
9. ejecutar estos dos comandos de node si es necesario:
    - npm install
    - npm run dev


La aplicación estará disponible por defecto en http://127.0.0.1:8000.
### NOTA: La app se creo de tal forma que también tenga componente visual por si no quieren usarlo con la API desde postman. 

## Uso
La API proporciona las siguientes rutas como ejemplo, ademas, hay una carpeta en el proyecto que se llama 
'collectionPostman' donde encontraras el archivo para que lo importes en tu postman local y puedas hacer las pruebas pertinentes
si quieres ver todas las rutas del sistema lo puedes hacer con 'php artisan route:list --path':
### NOTA: Se recomienda primero hacer las pruebas creando usuarios para que los ticket se puedan utilizar bien

- POST /api/userClientsApi: Crea un nuevo ticket.
- GET /api/userClientsApi: Recupera todos los Usuarios con opciones de paginación.
- GET /api/userClientsApi/{id}: Recupera un Usuario específico por su ID.
- PUT /api/userClientsApi/{id}: Actualiza un Usuario existente.
- DELETE /api/userClientsApi/{id}: Elimina un Usuario existente


- POST /api/ticketsApi: Crea un nuevo ticket.
- GET /api/ticketsApi: Recupera todos los tickets con opciones de paginación.
- GET /api/ticketsApi/{id}: Recupera un ticket específico por su ID.
- PUT /api/ticketsApi/{id}: Actualiza un ticket existente.
- DELETE /api/ticketsApi/{id}: Elimina un ticket existente.

Asegúrate de incluir los datos necesarios en las solicitudes (por ejemplo, usuario y estatus) 
según la ruta que estés utilizando, de todas formas, en el archivo estan con ejemplos.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas contribuir al desarrollo de TicketAPI, sigue estos pasos:

Haz un fork del repositorio.
Crea una rama para tu contribución: git checkout -b mi-contribucion
Realiza tus cambios y haz commit de ellos: git commit -m "Agrega nueva funcionalidad"
Haz push a tu rama: git push origin mi-contribucion
Crea una solicitud de extracción en GitHub.

Proyecto desarrollado por Benjamín Pérez

