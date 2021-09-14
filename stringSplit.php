//Complete the solution so that it splits the string into pairs of two characters. 
//If the string contains an odd number of characters then it should replace the missing 
//second character of the final pair with an underscore ('_').


<?php 

function solution($str) {
    if(strlen($str) < 1) return [];
    $strArr = str_split($str, 2);
    if(strlen(end($strArr)) == 1) {
        array_splice($strArr, -1, 1, array(end($strArr).'_'));
    };
    var_dump($strArr);
    return $strArr;
}

solution("abcdef"); // ["ab", "cd", "ef"]
solution("abcdefg"); // ["ab", "cd", "ef", "g_"]
solution("") // []

?>