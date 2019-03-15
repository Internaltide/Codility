<?php


function solution($A) {
    $full = range(1, sizeof($A)+1, 1);
    $diff = array_diff($full,$A);
    return array_pop($diff);
}