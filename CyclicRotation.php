<?php

/**
 * https://app.codility.com/programmers/lessons/2-arrays/cyclic_rotation/
 *
 * @param [array] $A
 * @param [int] $K
 * @return array
 */
function array_rotat($A, $K) {
    if( empty($A) ) return $A;

    $arrSize = sizeof($A);
    $remainder = $K%$arrSize;

    if( $remainder === 0 ){
        return $A;
    } else {
        $segmentOne = array_slice($A, $arrSize-$remainder);
        $segmentTwo = array_slice($A, 0, $arrSize-$remainder);
        return array_merge($segmentOne,$segmentTwo);
    }
}