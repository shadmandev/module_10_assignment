<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {
    return preg_match_all('/[aeiou]/i', $str, $matches);
}

function reverseString($str) {
    return strrev($str);
}

foreach ($strings as $str) {
    // Count vowels
    $vowelCount = countVowels($str);
    
    // Reverse string
    $reversedStr = reverseString($str);
    
    // Output
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
}

?>
