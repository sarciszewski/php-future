# php-future

[![Build Status](https://travis-ci.org/sarciszewski/php-future.svg?branch=master)](https://travis-ci.org/sarciszewski/php-future)

This library backports some new features into old versions of PHP.

This **MIT Licensed** project is produced and maintained for the good of the PHP developer community.

## WARNING ABOUT APPLICATION SECURITY

This should ONLY be used in the case that you cannot upgrade PHP for specific reasons within your business rules. For best application security you should always run the latest version of PHP where ever possible. This is intended as a stop gap for those that cannot upgrade and can be used while working toward upgrading to the latest version.

## ATTENTION PHP 5.2 / 5.3 USERS

As a general rule, we do not provide support for [any unsupported versions of PHP](http://php.net/eol.php). This means 5.4.x as of this writing.

If your operating system supports a 5.3.x version that is EOL'd (e.g. PHP 5.3.10 on Ubuntu 12.04 has security fixes backported), we will make exceptions. **The purpose of this library is not to encourage complacency and insecurity. Patch your systems.**

We do not support PHP 5.2.x anywhere. Please upgrade to a newer version of PHP.

## Features polyfilled by this library

* PHP 5.4
  * N/A
* PHP 5.5
  * `array_column()`
  * `boolval()`
  * `hash_pbkdf2()`
  * `openssl_pbkdf2()`
* PHP 5.6
  * `hash_equals()`
* PHP 7.0
  * N/A

See [wishlist.txt](wishlist.txt) for features we will be providing as time goes on. **To add to this list, either send a pull request, a [tweet](https://twitter.com/vodooKobra), or [an email](https://scott.arciszewski.me/contact) and we'll consider it for inclusion.**

### Out of scope:

* Password API - Go directly to https://github.com/ircmaxell/password_compat for these implementations
  * `password_hash()`
  * `password_verify()`
* PHP 7 CSPRNG - Go directly to https://github.com/paragonie/random_compat for these implementations
  * `random_bytes()`
  * `random_int()`

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
composer require sarciszewski/php-future
```

### Any script

Just include our `autoload.php` script outside of our `src` directory and you're
good to go. For example:

```php
require_once "vendor/sarciszewski/php-future/autoload.php";
```
