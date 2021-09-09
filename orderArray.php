// return either a sorted array, or if given null, return an empty array

<?php
function solution($nums) {
    if($nums){
        sort($nums);
    } else {
        $nums = [];
    }
    return $nums;
}
   print_r(solution([1, 2, 10, 50, 5]));
   var_dump(solution(null));
?>
