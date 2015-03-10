# Changelog

## 0.3.0

Widened scope to include 5.3 because of LTS operating systems.
Also added a `BaseFuture` class to prevent code duplication.

### New functions polyfilled

* **PHP 5.4**
    * `getimagesizefromstring()`
    * `hex2bin()`

### New interfaces polyfilled

* **PHP 5.4**
    * `JsonSerializable`
    * `SessionHandlerInterface`

## 0.2.0

### New functions polyfilled

* **PHP 5.5**
    * `array_column()`
    * `boolval()`
    * `hash_pbkdf2()`
    * `openssl_pbkdf2()`

## 0.1.1

Added unit test coverage.

## 0.1.0

Initial release. Just polyfilled hash_equals()