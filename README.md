Simple php api class with google places
=======================================

[![Packagist](https://img.shields.io/packagist/v/buuum/googleplaces.svg)](https://packagist.org/packages/buuum/googleplaces)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg?maxAge=2592000)](#license)

## Install

### System Requirements

You need PHP >= 7.0.0 to use agraciakuvut\KuvutPlaces but the latest stable version of PHP is recommended.

### Composer

agraciakuvut\KuvutPlaces is available on Packagist and can be installed using Composer:

```
composer requirea graciakuvut\kuvutplaces
```

### Manually

You may use your own autoloader as long as it follows PSR-0 or PSR-4 standards. Just put src directory contents in your vendor directory.


### Documentation

Not available

### Initialization

```php
$apikey = 'xxxxxx';
$places = new \agraciakuvut\KuvutPlaces($apikey);
```

### setters
#### setCountry
```php
$places->setCountry('XX');
```

#### setPlatform

```php
$places->setPlatform('XXX');
```

#### setPostalCode

```php
$places->setPostalCode('00000');
```

### Validate
```php
$places->validate();
```
#### output
```php
object(stdClass)#3 (1) {
  ["result"]=>
  object(stdClass)#2 (3) {
    ["valid"]=>
    bool(false)
    ["msg"]=>
    string(21) "Postal code not valid"
    ["code"]=>
    int(5)
  }
}
```

## LICENSE

The MIT License (MIT)

Copyright (c) 2016

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
