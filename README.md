
# Mini Blog | Laravel 8 + Jetstream  + Filament 3

RockContent Blog is public site With Preset of Roles, Permissions, ACL, User Management, Profile Management.




## Features

- Mobile Responsive Bootstrap 4 Design
- User Management with Roles
- Role Management
- Permissions Management
- Access Control List (ACL)
- Laravel 8 + Jetstream 
- Filament 3


## Tech Stack

**Client:** HTML, CSS, JavaScript, jQuery, VueJs, Bootstrap 4

**Server:** PHP, Laravel 8

**DataBase:** PostgreSql


## Installation

Install RockContent With Simple Steps

```bash
git clone https://github.com/Javlonbek-dev/Post_Blog.git
```

Install All Packages of laravel
```bash
composer install
```

Install the Filament Builde
```bash
composer require filament/filament:"^3.2" -W
```

Install the Filament Panel Builde
```bash
php artisan filament:install --panels
```

Install Jetstream With Livewire 
```bash
php artisan jetstream:install livewire
```

Install NPM Dependencies
```bash
npm install && npm run dev
```

Create .env file
```bash
cp .env.example .env
```

Generate Application key

```bash
php artisan key:generate
```

Update .env File with Database credentials and run migration with seed.
```bash
php artisan migrate --seed
```

All Set ! now serve laravel app on local and open app in browser.

Login With Admin
```bash
Username - test@example.com
Password - password
```
