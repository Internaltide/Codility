<?php

/**
 * 返回從陣列任取 m 個的所有組合
 *
 * @param [array] $array
 * @param [int] $m
 * @return arrat
 */
function combination1($array, $m) {
    $r = array();

    $n = count($array);
    if ($m <= 0 || $m > $n) {
        return $r;
    }

    for ($i = 0; $i < $n; $i++) {
        $t = array($array[$i]);
        if ($m == 1) {
            $r[] = $t;
        } else {
            $b = array_slice($array, $i + 1);
            $c = grouping($b, $m - 1);
            foreach ($c as $v) {
                $r[] = array_merge($t, $v);
            }
        }
    }

    return $r;
}

/**
 * 返回從陣列任取 m 個的所有組合
 *
 * @param [array] $array
 * @param [int] $m
 * @return arrat
 */
function combination2($arr,$m){
    $result = array();
    if ($m ==1){
       return $arr;
    }

    if ($m == count($arr)){
        $result[] = implode(',' , $arr);
        return $result;
    }

    $temp_firstelement = $arr[0];
    unset($arr[0]);
    $arr = array_values($arr);
    $temp_list1 = grouping($arr, ($m-1));

    foreach ($temp_list1 as $s){
        $s = $temp_firstelement.','.$s;
        $result[] = $s;
    }
    unset($temp_list1);

    $temp_list2 = grouping($arr, $m);
    foreach ($temp_list2 as $s){
        $result[] = $s;
    }
    unset($temp_list2);

    return $result;
}