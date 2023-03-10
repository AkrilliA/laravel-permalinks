# Laravel Permalinks Package

![assets/banner.png](assets/banner.png)

This package allows you to easily create permalinks for your Laravel application.

## Installation

To install the package, simply run the following command in your terminal:

```bash
composer require akrillia/laravel-permalinks
```

Then, add the service provider to the providers array in your `config/app.php` file:

```php
AkrilliA\LaravelPermalinks\LaravelPermalinksServiceProvider::class
```


## Usage

To create a permalink, you first need to generate a slug and then create the permalink link.

### Generate a slug
```php
$slug = GenerateSlug::execute($name);
```


### Create a permalink link
```php
$permalink = Permalink::create($url, $slug);
```

Alternatively you can call, which will automatically create a slug based on the URL.
```php
$permalink = Permalink::create($url);
```


This will return an instance of Permalink.

## Configuration
You can configure the package by publishing the config file using the following command:
```bash
php artisan vendor:publish --provider="AkrilliA\LaravelPermalinks\LaravelPermalinksServiceProvider"
```


This will create a `permalinks.php` file in your `config` directory. You can modify the settings in this file to suit your needs.

## License

This package is open-source software licensed under the ISC.

## Support

If you need any help, please contact me on my email or open an issue on GitHub.

