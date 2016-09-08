# Backups plugin for OctoberCMS


### Introduction
This package adds support for [Spatie Laravel Backup](https://github.com/spatie/laravel-backup) on your [OctoberCMS](octobercms.com) installation


### Installation
1. create a directory /\<october\>/plugins/**martin**/
2. clone this repo inside **martin** with **backups** name
3. run ```php artisan vendor:publish --provider="Spatie\Backup\BackupServiceProvider"```


### Usage
```php artisan backup:list```

```php artisan backup:run```

[More info](https://docs.spatie.be/laravel-backup/v3/taking-backups/overview)
