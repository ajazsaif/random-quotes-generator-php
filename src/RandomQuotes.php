<?php

namespace RandomQuotes;

/**
 * Random Quotes Genrator
 *
 * @category PHP Package
 * @package  Random Quotes
 * @author   Ajaz saif<ajazaalam@gmail.com>
 */

class RandomQuotes
{

    /**
     * @return array
     */
    public function getRandomQuotes()
    {
        //get the list of quotes
        $file = file_get_contents(dirname(__DIR__).'/assets/quotes.json');
        //convert JSON Documents to PHP Array
        $quotes = json_decode($file, true);
        //get a random index number
        $index = mt_rand(0, count($quotes));

        return $quotes[$index];
    }

    /**
     * Generate random quote
     * @return array
     */

    public function generate()
    {
        return $this->getRandomQuotes();
    }
}