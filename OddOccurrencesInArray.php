<?php

/**
 * https://app.codility.com/programmers/lessons/2-arrays/odd_occurrences_in_array/
 *
 * @param [array] $A
 * @return int
 */
function array_first_odd($A){
    $arr = array_count_values($A);
    foreach($arr as $key=>$count){
        if($count%2!==0) return $key;
    }
}