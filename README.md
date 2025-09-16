<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <h1>Proyecto Laravel con Jetstream</h1>
    <p>Este es un proyecto de Laravel que utiliza Jetstream para la autenticación y gestión de usuarios.</p>
    <h2>Configuración inicial del proyecto</h2>
    <ol>
      <li>Instalar Laravel: <code>composer create-project laravel/laravel nombre-del-proyecto</code></li>
      <li>Instalar Jetstream: <code>composer require laravel/jetstream</code></li>
      <!-- <li>Publicar los archivos de Jetstream: <code>php artisan jetstream:install livewire</code></li>
      <li>Ejecutar las migraciones: <code>php artisan migrate</code></li>
      <li>Instalar las dependencias de NPM: <code>npm install && npm run dev</code></li> -->
    <p>Para comprobar que tengas instaldo Laravel, en tu carpeta raíz del proyecto usa el comando: 
    </p>
    <code>php artisan --version</code>
    <p>La versión minima requerida para este proyecto es la 12. Luego para poder verificar el servidor de desarrollo, utilizamos en la terminal dentro de la carpeta del proyecto el comando: </p>
    <code>php artisan serve</code>
    <p>Esto nos mostrará la url en la que se está ejecutando el proyecto, que normalmente es: http://localhost:8000</p>
    <p>Una vez que si instaló todo correctamente y lo comprobamos con los comandos anteriores, la estructura de carpetas que se genera debería ser la siguiente:</p>
    <pre><code>
       - app/
       - bootstrap/
       - config/
       - database/
       - public/
       - resources/
       - routes/
       - storage/
       - tests/
       - vendor/
       - .env
       - artisan
       - composer.json
       - composer.lock
       - package.json
       - phpunit.xml
       - README.md</code></pre>
    <h2>Comprobación de Jetstream</h2>
    <p>> Para comprobat la instalación correcta de Jetstream utilizamos en la terminal del proyecto, el comando: </p>
    <code>composer show laravel/jetstream</code>
    <p>Esto es para confirmar que este listado en el archivo composer. Debio haber publicaod los siguientes recursos: </p>
    <pre><code>
      - Configuración: config/jetstream.php
      - Vistas: resources/views/ (debería tener directorios como auth, profile, layouts)
      - Migraciones: Revisa en database/migrations/ las migraciones de Jetstream
      - Traducciones: lang/vendor/jetstream/
    </code></pre>
    <p>Si todo está en orden, ya tienes Laravel con Jetstream instalado.</p>
    <h2>Base de datos</h2>
    <p>> Crea una base de dato con XAMPP para poder migrar ahí las tablas.</p>
    <p>Luego en el archivo .env configura los datos de la base de datos:</p>
    <pre><code>
      DB_CONNECTION=mysql
      DB_HOST=
      DB_PORT=3306
      DB_DATABASE=nombre_de_la_base_de_datos
      DB_USERNAME=tu_usuario
      DB_PASSWORD=tu_contraseña
    </code></pre>
    <p>Luego ejecuta el comando en la terminal del proyecto:</p>
    <code>php artisan migrate</code>
    <p>Esto creará las tablas necesarias en la base de datos.</p>
    <h2>Instalación de complementos</h2>
    <p>> Finalmente, para instalar las dependencias de Node.js y compilar los assets, ejecuta:</p>
    <code>npm install && npm run dev</code>
    <p>Con esto, el proyecto de Laravel con Jetstream debería estar configurado adecuadamente.</p>
    <p>> Ahora se ajusta la zona horaria</p>
    <p>Abre el archivo <code>"config/app.php"</code> y localiza la línea que define la zona horaria: </p>
    <pre><code>'timezone' => 'UTC',</code></pre>
    <p>Cámbia a la zona horaria: </p>
    <pre><code>'timezone' => 'America/Merida',</code></pre>
    <p>Guarda los cambios en el archivo.</p>
    <h2>Perzonalización visual básica</h2>
    <p>Abre el archivo <code>"config/jetstream.php"</code> y busca la siguiente línea:</p>
    <pre><code>
      'features' => [
        // Features::profilePhotos(),
        // Features::api(),
        // Features::teams(['invitations' => true]),
        // Features::accountDeletion(),
      ],
    </code></pre>
    <p>Descomenta la línea <code>Features::profilePhotos(),</code> para habilitar las fotos de perfil de usuario. Guarda los cambios en el archivo.</p>
    <p>Luego, para aplicar los cambios visuales, ejecuta nuevamente el comando:</p>
    <code>npm run dev</code>
    <p>Esto recompilará los assets y aplicará las nuevas configuraciones visuales
    al proyecto.</p>
  </div>
</body>
</html>