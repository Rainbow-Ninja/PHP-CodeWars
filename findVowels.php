// Return the number (count) of vowels in the given string.
// We will consider a, e, i, o, u as vowels for this Kata (but not y).
// The input string will only consist of lower case letters and/or spaces.

<?php
    function getCount($str) {
      $vowelsCount = 0;
      $vowels = ['a', 'e', 'i', 'o', 'u'];
      for($x = 0; $x < count($vowels); $x++){
        $vowelsCount += substr_count($str, $vowels[$x]);
      }
      return $vowelsCount;
    }

    echo getCount("Hello, and welcome to movie phone!");
?>
