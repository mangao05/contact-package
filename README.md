# Contact Form

![Issues](https://img.shields.io/github/issues/mangao05/contact-package?style=flat-square)



This contact form is created in laravel. Used to send an email and save it to database.

## Installations
```bash

composer require naotech/contact

```
## Usage/Instructions
Go to config/app.php and add this to providers
```php
Naotech\Contact\ContactServiceProvider::class,
```

Publish the vendor using command:
```bash
php artisan vendor:publish
```

and choose the added provider.

Migrate the database:

```bash
php artisan migrate
```

