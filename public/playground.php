<?php

use Illuminate\Support\Collection;

require __DIR__.'/../vendor/autoload.php';

$numbers = new Collection([
    1,2,3,4,5,6,7,8,9,10
]);

//if($numbers->contains(10)){
//    die('contains 10');
//}

$lessthanfive= $numbers->filter(function ($number){
    return $number <=5;
});
//$numbers->map


die(var_dump($lessthanfive));
