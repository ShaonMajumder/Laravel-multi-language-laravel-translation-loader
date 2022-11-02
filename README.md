<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation
### Install package
```bash
composer create-project laravel/laravel multi-language
cd multi-language
composer require spatie/laravel-translation-loader
```

### In config/app.php (Laravel) or bootstrap/app.php (Lumen)
you should replace Laravel's translation service provider
```php
Illuminate\Translation\TranslationServiceProvider::class,
```
by the one included in this package:
```php
Spatie\TranslationLoader\TranslationServiceProvider::class,
```

### Set Env
Create and Open ENV
```bash
cp .env.example .env
code .env
```
Edit ENV with our database name 'multilanguage':
```ENV
DB_DATABASE=multilanguage
DB_USERNAME=root
DB_PASSWORD=
```


### Migration
You must publish and run the migrations to create the `language_lines` table:
```bash
php artisan vendor:publish --provider="Spatie\TranslationLoader\TranslationServiceProvider" --tag="migrations"
php artisan migrate:fresh --seed
```
Optionally you could publish the config file using this command.
```bash
php artisan vendor:publish --provider="Spatie\TranslationLoader\TranslationServiceProvider" --tag="config"
```

This is the contents of the published config file:
```php
return [

    /*
     * Language lines will be fetched by these loaders. You can put any class here that implements
     * the Spatie\TranslationLoader\TranslationLoaders\TranslationLoader-interface.
     */
    'translation_loaders' => [
        Spatie\TranslationLoader\TranslationLoaders\Db::class,
    ],

    /*
     * This is the model used by the Db Translation loader. You can put any model here
     * that extends Spatie\TranslationLoader\LanguageLine.
     */
    'model' => Spatie\TranslationLoader\LanguageLine::class,

    /*
     * This is the translation manager which overrides the default Laravel `translation.loader`
     */
    'translation_manager' => Spatie\TranslationLoader\TranslationLoaderManager::class,

];
```
Note: publishing assets doesn't work out of the box in Lumen. Instead you have to copy the files from the repo.

### Setting UI
```bash
composer require laravel/ui
php artisan ui vue
php artisan ui vue --auth
npm install
npm run dev
```
### Setting key
```bash
php artisan key:generate
```

### Serve
```bash
php artisan serve
```