// when given a string, should return string with every word capitalised
<?php
    function toJadenCase($string)
    {
//        $arr = explode(' ', $string);
//        for($x = 0; $x < count($arr); $x++){
//             $arr[$x] = ucfirst($arr[$x]);
//        }
//        return implode(' ', $arr);
        return ucwords($string);
    }

    echo toJadenCase("How are you feeling today?");
?>
