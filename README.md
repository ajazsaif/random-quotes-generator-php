# random-quotes-generator-php
A simple library that generates random quotes

<code> <?php 

require_once './vendor/autoload.php';

$quote = new \RandomQuotes\RandomQuotes();

print_r($quote->generate());

echo "\n"; 
</code>
<code>
    outpt:- Array
(
    [quoteAuthor] => Rumi
    [quoteText] => Let yourself be silently drawn by the stronger pull of what you really love.
)

</code>
