<p align="center">
	<a href="https://laravel.com" target="_blank">
		<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
	</a>
</p>

<p align="center">
	<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
	<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Introduction

A simple Laravel web application to manage the lite notes.



### Commands Used
- Install Breeze for authentication.
```
composer install laravel/breeze --dev         // install the breeze package
php artisan breeze:install                    // install the breeze into project folder
```

- Create model and run migration in one command
```
php artisan make:model Note -m
php artisan migrate            // execute the migration file to create table in database
```

- Create resource controller to manage CRUD operation of the Model
```
php artisan make:controller NoteController --resource 