# php-future

This library backports some new features into old versions of PHP.

This **MIT Licensed** project is produced and maintained by [Resonant Core](https://resonantcore.net) for the good of the PHP developer community.

## WARNING ABOUT APPLICATION SECURITY

This should ONLY be used in the case that you cannot upgrade PHP for specific reasons within your business rules. For best application security you should always run the latest version of PHP where ever possible. This is intended as a stop gap for those that cannot upgrade and can be used while working toward upgrading to the latest version.

## ATTENTION PHP 5.2 / 5.3 USERS

We only officially support for versions of PHP that have reached or exceeded their end-of-life date. The code should still run on **5.3**. Don't try to run it on 5.2. Refer to http://php.net/eol.php for the latest updates on supported PHP versions.

## Features polyfilled by this library

* PHP 5.5
  * `array_column()`
  * `boolval()`
  * `hash_pbkdf2()`
  * `openssl_pbkdf2()`
* PHP 5.6
  * `hash_equals()`
* PHP 7.0
  * N/A

### Out of scope:

* Password API - Go directly to https://github.com/ircmaxell/password_compat for these implementations
  * `password_hash()`
  * `password_verify()`

## Why?

When our consultants submit security enhancements to open source projects, the
maintainers sometimes complain that some features are only in newer versions of 
PHP so they can't require them. We wrote this to provide compatibility across
all versions of PHP and prevent these issues from occurring.

In the future, we will attempt to backport *some* PHP 7 features for use in
versions 5.5 and 5.6, where possible.

## How it Works

Features that only exist in future versions are exposed in the global namespace.
These functions call the appropriate classes/methods from the `src` folder. This
ensures that PHP only load the codes when it actually needs it.

## How to use this library

### Composer

```sh
composer require resonantcore/php-future
```

### Any script

Just include our `autoload.php` script outside of our `src` directory and you're
good to go. For example:

```php
require_once "vendor/resonantcore/php-future/autoload.php";
```
