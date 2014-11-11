laravel-maillog
===============

Rewrites the laravel 4.2 mail that is saved to log to also contain subject and description.

### SetUp Application

Add the package to your composer.json and run composer update.
```php
"peercode/mail": "4.2.*@dev"
```

Add the maillog service provider in app/config/app.php:

```php
'Peercode\Mail\MailServiceProvider',
```
