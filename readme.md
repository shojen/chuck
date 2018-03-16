
## Sobre el proyecto

Es una prueba, en la que muestra frases célebres de Chuck Norris. En el que en la home muestra una frase aleatoria al recargar la página y en el que posee un panel de administración para ver, editar, modificar y eliminar frases.

También posee dos rutas para una api, una por método get que devuelve una frase y otra por método post que inserta una frase. Para insertar una frase debe de estar autenticado con username y password.

## Instalación

- Descarga este repositorio
- Configura tu archivo .env con la DB y usuario y contraseña de la misma
- Una vez configurado ejecuta composer install
- Acontinuación instala las migraciones y los seeders con el comando php artisan migrate --seed. Ésto instalará un usuario y unas cuantas frases


## Datos a saber

Username: chuck

Email: chuck@norris.es

Password: No_Necesito

Las rutas para login es http://tuproyecto.io/login 

Las rutas para la api es http://tuproyecto.io/api/v1 tanto para post como para get

Ejecuta el comando php artisan listar:novistos para que te aparezca el listado de las frases que no han aparecido aún en la home.

Ejecuta el comando php artisan listar:vistos para que aparezca el listado de las frases que ya han aparecido en la home.
