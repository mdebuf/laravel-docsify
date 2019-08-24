# laravel-docsify

This package provides an easy way to add documentation to your project using docsify.

## Installation

You can install the package via Composer:

```bash
composer require mdebuf/laravel-docsify
```

The package will automatically register itself.

Optionally, publish its config file to config/docsify.php:

```bash
php artisan vendor:publish --provider="Mdebuf\Docsify\DocsifyServiceProvider"
```

## Documentation

Add your markdown documentation files in the docs/ folder and goto the /docs route to view your documentation.  You can change the route in the config file.