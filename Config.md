Routes:
Para desacoplarse de la arquitectura de Laravel se debe hacer de forma siguiente:
- Crear tu propio RouteServiceProvider
- Ir a config/app.php y añadir el RouteServiceProvider en el array de providers
- ejecutar los comandos cache:clear y composer dump-autoload
