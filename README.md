# Laravel Json Localization Manager

This is a package to manage json strings for the new Laravel 5.4 Localization Translation Strings As Keys.
[Using Translation Strings As Keys][6ea2d96e]

  [6ea2d96e]: https://laravel.com/docs/5.4/localization#using-translation-strings-as-keys "Using Translation Strings As Keys"

## Composer require
``` bash
$ composer require amamarul/laravel-json-locations-manager
```
## Add Provider into config/app.php
``` php
Amamarul\LaravelJsonLocationsManager\Providers\LaravelJsonLocationsManagerServiceProvider::class,
```
### For Only local environment
Add the following to the AppServiceProvider in the register function:
#### app/Providers/AppServiceProvider.php
``` php
 if ($this->app->environment() == 'local' || $this->app->environment() == 'testing') {
     /*
      * Load third party local providers
      */
     $this->app->register(\Amamarul\LaravelJsonLocationsManager\Providers\LaravelJsonLocationsManagerServiceProvider::class);
 }
```

## Package install
Run in console this command
``` bash
$ php artisan amamarul:location:install
```
This command install database and will ask if you want to import the existing locations in the application.
There are 2 questions, the first to import the strings in arrays and the second to import the existing strings into json files.
This will pupulate the database with all strings. You don't need to run artisan migrate, this package uses an independent database (sqlite).


### Other Console Command
You can publish all languages Json files in console running
``` bash
$ php artisan amamarul:location:publish
```
Of course you also can do that in browser views.

## Manage Locations
Now you can access to /translations/home in your browser and manage all langs strings.
 - Search Language Strings
 - Add new Language
 - Add new Strings
 - Edit Strings
 - Publish / Update json Files

## Publish the views and config file
``` bash
$ php artisan vendor:publish --provider='Amamarul\LaravelJsonLocationsManager\Providers\LaravelJsonLocationsManagerServiceProvider'
```
### In the config file you can call your custom layout, the content section and the scripts section (this is important for the edit views) and routes prefix and middlewares.

## Routes middlewares
in config file you can add your middlewares, by default is only 'web' middleware

### Feel free to send improvements
Created by [amamarul][760a7857]

  [760a7857]: https://github.com/amamarul "https://github.com/amamarul"

## To Improve
There are a problem with the route('') in the strings. In Json generation they are converted to url format('http://...'). If you don´t use helpers that is no a problem, but I would like to solve that. If someone discover the way to fix that I would appreciate it very much.

# Some Screenshots
![Home View](https://cloud.githubusercontent.com/assets/17328721/23283406/6f223750-fa04-11e6-88fb-0f8c7845206b.png)
![Language View 1](https://cloud.githubusercontent.com/assets/17328721/23283411/7865e5f0-fa04-11e6-8097-d01728d4090d.png)
![Language View 2](https://cloud.githubusercontent.com/assets/17328721/23283416/80c19ece-fa04-11e6-8448-0c5eae424b85.png)
![Language Edit 1](https://cloud.githubusercontent.com/assets/17328721/23283420/87986f16-fa04-11e6-9b2d-30b23cf278a2.png)
![Individual String View](https://cloud.githubusercontent.com/assets/17328721/23283427/9596da6c-fa04-11e6-86b4-5a69b2f85ea6.png)
