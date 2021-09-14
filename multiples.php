//given a number find the multiples of 3 and 5 up to that number. Return the sum of these multiples,
// if the number is negative return zero.

<?php

function solution($number){
    if($number < 1) return 0;
    $count = 0;
    for($x = 0; $x < $number; $x++) {
        $x%3 == 0 ? $count+=$x : ($x%5 == 0 ? $count+=$x : $count+=0);
    }
    return $count;
}

echo solution(10); //solution 23
echo solution(-10)
?>