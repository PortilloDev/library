Routes:
Para desacoplarse de la arquitectura de Laravel se debe hacer de forma siguiente:

## Rutas
- Crear tu propio RouteServiceProvider
- Ir a app/config/app.php y añadir el RouteServiceProvider en el array de providers
- ejecutar los comandos cache:clear y composer dump-autoload

## Excepciones
- En shared creamos una clase excepción como la que tenemos en app
- Ir a bootstrap/app.php y cambiar la clase App\Exceptions\Handler::class de la línea 41 por nuestra clase Handler personalizada


## Inversión de depencias
- Crear un nuevo servicio DependencyServiceProvider.php
- Registrar nuestro service provider en app/config/app.php
