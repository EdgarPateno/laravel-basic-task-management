<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   l a r a v e l - b a s i c - t a s k - m a n a g e m e n t 
 
 

<h2>### Create full CRUD Application</h2>

<p>Note: You need to run mysql in xampp/laragon/wamp. <br>
Don't forget to include/use yung mga classes</p>
<ul>
<li>Table</li>
<li>Model</li>
<li>Controller (CRUD)</li>
</ul>

<p>composer create-project laravel/laravel appName</p>

<p>Resources (return JSON FORMAT, fields na need niyo lang ibalik)<br>
Routing (get, post, put, delete)</p>

<ul>
<li>1. Migration File<br>
   php artisan make:migration create_name_table</li>
<li>2. Update ung create_name_table na nasa database/migrations<br>
   Schema::create</li>
<li>3. php artisan migrate</li>
<li>4. Create Model (if iba ung table_name add protected $table = '';)<br>
   php artisan make:model ModelName</li>
<li>5. Create Factory (dummy data faker) (i define yung model niyo protected $model = <li>ModelName::class;)<br>
   php artisan make:factory FactoryName<br>
   Create Seeder<br>
   php artisan make:seeder SeederName<br>
   php artisan db:seed --class=SeederName</li>
<li>6. add fillable<br>
   protected $fillable = ['attributes/columns'];</li>
<li>7. Create controller<br>
   php artisan make:controller ControllerName --api</li>
<li>8. Create routes (routes/api.php)<br>
   Route::method('/course',['ControllerName::class','function sa controller']);<br>
   Route::resource('/course',ControllerName::class]);</li>
<li>9. Create Resource<br>
   php artisan make:resource ResourceName</li>
<li>10. Lagyan mo na ng logic or mga codes ung functions mo sa Controller
    <ul>        
        <li>index = getAll ModelName::all();</li>
        <li>store = insert/save ModelName::create($input);</li>
        <li>show = getDetailsById ModelName::findOrFail($id);</li>
        <li>update = updateById $product = ModelName::findOrFail($id);<br>
        $product->update($input);</li>
        <li>destroy = deleteById $product = ModelName::findOrFail($id);<br>
        $product->delete($id);</li>
    </ul>
</ul>
