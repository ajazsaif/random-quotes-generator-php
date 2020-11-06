<?php 

require_once './src/RandomQuotes.php';

$quote = new \RandomQuotes\RandomQuotes();

print_r($quote->generate());

echo "\n";