<?php
/**
 * https://app.codility.com/programmers/lessons/1-iterations/binary_gap/
 *
 * @param [int] $N
 * @return int
 */
function maxBinaryGap($N) {
    $decbin = decbin($N);

    $tmp = 0;
    $maxGap = 0;
    $len = strlen($decbin);
    for( $i=0;$i<=$len-1;$i++ ){
        if(isset($decbin[$i])){
            if( $decbin[$i]==0 ) $tmp++;
            if( $decbin[$i]==1 ){
                if( $tmp > $maxGap ) $maxGap = $tmp;
                $tmp = 0;
            }
        }
    }

    return $maxGap;
}