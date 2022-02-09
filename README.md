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
