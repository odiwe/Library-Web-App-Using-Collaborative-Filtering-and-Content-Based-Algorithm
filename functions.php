<?php
/**
 * Created by PhpStorm.
 * User: ODIWE JOHN
 * Date: 3/27/2017
 * Time: 9:39 PM
 */

function calculate_rating($rating){
    $r = $rating*5;
    $r2 = $r/100;
    return $r2;
}

function add_rating($rating, $rate){
    $r3 = $rating + $rate;
    $r4 = $r3/2;
    return $r4;
}