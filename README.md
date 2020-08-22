# Api Blog Con Laravel

Hacemos una API REST de Blogs

## Documentacion

Documentacion

```
https://laravel.com/docs/7.x/installation
```

### Requisitos

Para empezar

```
VisualStudioCode
Laragon
Git
Composer
```

### Instalacion

A step by step series of examples that tell you how to get a development env running

Creamos un nuevo proyecto

```
composer create-project laravel/laravel blog
```

Instalamos dependencias

```
composer i
```

Creamos la base de datos con el nombre que le dimos en el .env

```
DB_DATABASE
```

### Tarea 21/08/2020

Apliqué el mismo concepto que hicimos en el catalogo pero para este proyecto. Busquen las migraciones y analicenlo. Haganse un diagrama de las tablas si no lo entienden.
Quiero que la clase que viene intenten hacer esto si tienen tiempo:
- crear un seeder para cada nueva tabla correspondiente y alimentarlo con dos registros.
- crear las rutas correspondientes de lectura a estas dos nuevas tablas (recuerden que tienen que crear los modelos (User.php es un ej de Modelo)), las rutas se encuentran en api.php. quiero que terminen quedando 6 rutas en total (2 existentes de usuario y las 4 nuevas).
Suerte.

### 21/08/2020

Modifiqué los seeders para que se puedan insertar varios registros.
Siempre que modificamos los seeders vamos a correr estos comandos:

actualizamos el vendor

```
composer dump-autoload
```

y volvemos a ejecutar las migraciones y sus seeds

```
php artisan migrate:fresh --seed
```

### Tarea 29/08/2020

Agregar los metodos api para los demas controladores con sus respectivas rutas