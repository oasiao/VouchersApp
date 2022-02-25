# Vouchers App
Una pequeña plataforma donde un usuario puede acceder (puede registrarse e iniciar sesión) y verá una lista de ofertas.
Al hacer click sobre alguna de ellas, generará un código único y aleatorio, que se guardará en la base de datos. 

En su perfil, podrá revisar que códigos promocionales tiene y pulsar sobre un botón y canjear el código, 
acción que será reflejado en la base de datos (el campo redemeed será true o false).

## Desplegado en el servidor
http://oasiao.randion.es/VouchersApp/public/vouchers

## Funcionamiento en local
Utilizo pgsql, pero es indiferente ya que utilizo Eloquent para la la gestión de datos. Por tanto, bastaría con modificar el archivo 
.env, introducir los datos del DB_CONNECTION, migrar las tablas en la base de datos (que se haya creado) y ejecutar el seeder que ya esta creado.

- php artisan migrate
- php artisan db:seed VoucherSeeder

## Requerimientos de la aplicación
- [x] Un usuario se registra o hace login en la aplicación. (Además, si no hace login, no le permitirá obtener 
ningún código promocional gracias al middleware)
- [x] El usuario ve una lista de ofertas y un botón para generar un código promocional
- [x] Un usuario puede hacer click en el botón para recibir un código promocional, éste tiene que ser único.
- [x] El usuario puede ver un listado de sus códigos promocionales, en otra página y,
haciendo click sobre cada uno de ellos, canjearlos. (Además, no permitirá canjear aquellos que estén caducadas)
- [x] En todos los casos, aparecerá confirmación (Feedback) de las operaciones
realizadas


### Tiempo invertido
Los requerimientos básicos de la aplicación han sido realizadas en 3h. Durante la 4ta hora, he mejorado la aplicación con controles
y estilos con bootstrap. 
