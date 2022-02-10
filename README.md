## Laravel Guide 


---

- Empezamos con composer update en caso de bajada de repositorio remoto

> composer update

- Deberemos  incorporar breeze 
>composer require laravel/breeze --devphp 
- make migration 

>php artisan make:migration create_products_table --create=products

- add route to web.php

- Make model 

>php artisan make:controller ProductController --resource --model=Product

- Agregar carpeta en views conteniendo archivos .blade

 

- Agregar al modelo $fillable(sino error campopide default ) tal que :
 
 >protected $fillable = [
        'nombre','saga','lanzamiento'
    ];


- Para Auth haremos lo siguiente :

>php artisan breeze:install
>npm install
>npm run dev 

- Importante mirar directorio de rutas (web.php)

- ir a views.layout (asi modificamos el link de dashboard )


- Para las traducciones debemos ir a lang y crear :
>MisTraducciones.php
ahi podemos traducir tal que :

` <?php
return[
'role'=> 'rol',
'Name' => 'Nombre',
'password'=> 'contraseña',

'attributes' => [
    'role' => 'rol',
    'name' => 'nombre',
    'password' => 'clave',
]]
?>`

1. Ademas deberemos especificar la traduccion en el input destino tal que :
>{{__('Mistraducciones.role')}}:

- Para las gates que restrinjan acceso a Servicios :
>vamos a Providers/AuthserviceProviders

` Gate::define('isAuthor', function($user) {
             return $user->role == 'author';
         });`

 1. luego deberemos ir al input rn concreto a restringir tal que 

 >  @can('isAdmin')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @else
                    <button type="submit" class="btn btn-danger" disabled>Delete</button>
                    @endcan
