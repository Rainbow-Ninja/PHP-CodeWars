// Code Wars Challenge
// Take a string argument and reverse each word keeping the word order, and spacing, the same

<?php
    function reverseWords($str) {
      $reversedArray = [];
      $words = explode(" ", $str);
      for ($x = 0; $x < count($words); $x++) {
        array_push($reversedArray, strrev($words[$x]));
      }
      $newSentence = implode(" ", $reversedArray);
      return $newSentence;
    }
    echo reverseWords("Hello World");
?>
