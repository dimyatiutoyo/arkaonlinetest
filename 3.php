<?php

function count_vowels($string = null) {
    //regex 
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}

echo count_vowels("arkademy");