# This is my package laravel-user-status

## Installation

You can install the package via composer:

```bash
composer require firith/laravel-user-status
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="user-status-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-user-status-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-user-status-views"
```

## Usage

```php
namespace App\Http\Middleware;

use Firith\LaravelUserStatus\Http\Middleware\CheckBannedUser;

class CheckBanned extends CheckBannedUser
{

}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Balázs Simon](https://github.com/firith)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
