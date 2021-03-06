<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Real-Time Chat with Laravel, Vue.js & Pusher

Source: https://www.youtube.com/watch?v=CkRGJC0ytdU

### Commands that used to create the project:

- composer create-project --prefer-dist laravel/laravel chatapp
- composer require laravel/sanctum
- php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
- composer require laravel/jetstream
- php artisan jetstream:install inertia
- php artisan migrate
- php artisan vendor:publish --tag=jetstream-views
- php artisan serve
- php artisan make:model ChatRoom -m
- php artisan make:model ChatMessage -m
- php artisan migrate
- php artisan make:seeder ChatRoomSeeder
- php artisan db:seed
- php artisan make:controller ChatController
- composer require pusher/pusher-php-server "~4.0"
- npm install --save laravel-echo pusher-js
- php artisan event:generate
- npm remove pusher-js
- npm install --save pusher-js@6.0.3
