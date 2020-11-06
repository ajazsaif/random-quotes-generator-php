# random-quotes-generator-php
A simple library that generates random quotes

## Installation
The recommended way to install this library [Composer](http://getcomposer.org):

```sh
composer require ajaz/random-quotes-generator-php

```
## Usage example

```php
<?php
  require_once './vendor/autoload.php';
  
  $quote = new \RandomQuotes\RandomQuotes();

  print_r($quote->generate());

  echo "\n";
?>
```