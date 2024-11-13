## Introduction
The Navid Test PHP library 

## Compatible
PHP 5.7.x - 8.0.x

## API Documention
* 

## API Specification
* 

## Installation
To install the library via <a href="https://getcomposer.org/" target="_blank">composer</a>, run the following command:
* composer require navidut/test2

Or add **"navidut/test2": "^1.0.0"** to the "require" section in composer.json

## Pure PHP Code 
After you install the composer succssfully , you can add such php code and use the library

```
<?php
require __DIR__ . '/vendor/autoload.php'; // Autoload our classes


use Navidut\Test2\IPN;
use Navidut\Test2\Request;
use Navidut\Test2\Authorize;
use Navidut\Test2\Start;
use Navidut\Test2\VerifyAuth;


$start = new Start();
$start->doSomething();

$ipn = new IPN();
$ipn->doSomething();

$request = new Request();
$request->doSomething();

$authorize = new Authorize();
$authorize->doSomething();

$Start = new Start();
$Start->doSomething();

$verifyAuth = new VerifyAuth();
$verifyAuth->doSomething();
```
