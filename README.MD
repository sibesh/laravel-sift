# Laravel Sift
## Installation
```
composer require "sibesh/laravel-sift"
```

## Configuration
config/app.php
```php
    'providers' => [
        Sibesh\LaravelSift\SiftServiceProvider::class,
    ]

    'aliases' => [
        'SiftScience' => Sibesh\LaravelSift\Facades\SiftScience::class,
    ]
```
```
php artisan vendor:publish --provider="Sibesh\LaravelSift\SiftServiceProvider"
```
it will generate sift-science.php inside config directory

## Usage
ENV Settings
```
SIFT_API_KEY=your api key here
```
```php
use SiftScience;
SiftScience::client()->track('$logout', [
    '$user_id'          => 'userId',
]);
```

