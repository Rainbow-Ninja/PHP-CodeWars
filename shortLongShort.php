//two strings are passed. Return the shorter one, longer one, shorter one

<?php
  function shortLongShort(string $s1, string $s2): string {
    return strlen($s1) < strlen($s2) ? $s1.$s2.$s1 : $s2.$s1.$s2;
  }

  echo shortLongShort('45', '1'); // 1451
  echo shortLongShort('13', '200'); // 1320013
  echo shortLongShort('', 'empty'); // empty
?>