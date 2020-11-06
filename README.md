# random-quotes-generator-php
A simple library that generates random quotes

```php
<?php
  require_once './vendor/autoload.php';
  
  $quote = new \RandomQuotes\RandomQuotes();

  print_r($quote->generate());

  echo "\n";
?>
```