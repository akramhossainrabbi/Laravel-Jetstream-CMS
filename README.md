<h1 align="center">LARAVEL JETSTREAM CMS</h1>

## About Laravel Jetstream CMS

Laravel Jetstream CMS (Version: 1.0) is a content management system build with Laravel, Jetstream, Livewire and Tailwind Css and Alpin js.

- [Larave 8.x](https://laravel.com/docs/8.x/installation).
- [Jetstream 2.x](https://jetstream.laravel.com/2.x/introduction.html).
- [Livewire 2.x](https://laravel-livewire.com/docs/2.x/quickstart).
- [Tailwind CSS 2.x](https://v2.tailwindcss.com/docs).
- [Alpine js 3.x](https://alpinejs.dev).

## Requirements
The dependencies requires PHP 7.4 or higher.


## Installation

- Clone or Download ZIP
- Go to the folder application using ```cd``` command on your cmd or terminal
- Run ```composer install```
- Copy ```.env.example``` file to ```.env``` on the root folder. You can type copy ```.env.example .env``` if using command prompt Windows or ```cp .env.example .env``` if using terminal, Ubuntu
- Open your ```.env``` file and change the database name (```DB_DATABASE```) to whatever you have, username (```DB_USERNAME```) and password (```DB_PASSWORD```) field correspond to your configuration.
- Run ```php artisan key:generate```
- Run ```php artisan migrate```
- Run ```php artisan db:seed```
- Run ```php artisan serve```
- Go to http://localhost:8000/

## How do I turn off Teams?

Jetstream's team scaffolding and opinions may not work for every application. If it doesn't work for your use case, feel free to turn off team functionality. To turn off, all you need to do is:


1. **Go to**```config/jetstream.php``` **and scroll down to** ```Features``` **section**
```
    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | Some of Jetstream's features are optional. You may disable the features
    | by removing them from this array. You're free to only remove some of
    | these features or you can even remove all of these if you need to.
    |
    */

    'features' => [
        // Features::termsAndPrivacyPolicy(),
        Features::profilePhotos(),
        // Features::api(),
        Features::teams(['invitations' => true]),
        Features::accountDeletion(),
    ],
```


2. **Now comment out** ```Features::teams(['invitations' => true])``` **this line of code**
```
    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | Some of Jetstream's features are optional. You may disable the features
    | by removing them from this array. You're free to only remove some of
    | these features or you can even remove all of these if you need to.
    |
    */

    'features' => [
        // Features::termsAndPrivacyPolicy(),
        Features::profilePhotos(),
        // Features::api(),
        //Features::teams(['invitations' => true]),
        Features::accountDeletion(),
    ],
```

## Admin Loging

- Username: ```admin@mail.com```
- Password: ```password```

Note: You can change the username and password from ```database/seeders/UserSeeder.php``` before seeding database.


## License

The Laravel Jetstream CMS is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
