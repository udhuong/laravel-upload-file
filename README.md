# Laravel-Upload-File

Laravel-Upload-File is a package for uploading files with Laravel.

## Features

- Filesystem-driven approach is easily configurable to allow any number of upload directories with different accessibility. Easily restrict uploads by MIME type, extension and/or aggregate type (e.g. `image` for JPEG, PNG or GIF).

## Example Usage

Upload a file to the server, and place it in a directory on the filesystem disk named "uploads". This will create a Media record that can be used to refer to the file.

```php
$file = LaravelUploadFile::fromSource($request->file('images'))
	->toDestination('s3', 'uploads')
	->upload();
```

## Installation

Add the package to your Laravel app using composer

```bash
composer require plank/laravel-mediable
```

Register the package's service provider in `config/app.php`. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

```php
'providers' => [
    ...
    Udhuong\LaravelUploadFile\UploadFileServiceProvider::class,
    ...
];
```

The package comes with a Facade for the image uploader, which you can optionally register as well. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

```php
'aliases' => [
	...
    'FileUploader' => Plank\Mediable\FileUploader::class,
    ...
]
```

Publish the config file (`config/mediable.php`) of the package using artisan.

```bash
php artisan vendor:publish --provider="Udhuong\LaravelUploadFile\UploadFileServiceProvider"
```

## Documentation

Updating...

## License

This package is released under the MIT license (MIT).

## About package

Package developed based on laravel-mediable of [plank/laravel-mediable](https://github.com/plank/laravel-mediable)

## About author

[Plank](http://ungdinhhuong.com) is a web development agency based in Hanoi, Vietnam.

