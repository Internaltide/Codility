<?php

/**
 * https://app.codility.com/programmers/lessons/3-time_complexity/frog_jmp/
 *
 * @param [int] $X
 * @param [int] $Y
 * @param [int] $D
 * @return void
 */
function solution($X, $Y, $D) {
    $distance = $Y - $X;

    $minJumps = ($distance===0) ? 0:ceil($distance/$D);

    return (int)$minJumps;
}