<?php

namespace MyApp;

class Bingo{

  function create(){
    $nums = []; // num[i] => 15 * i + 1 ~ 15 * i + 15

    for ($i=0; $i < 5; $i++) {
      $col = range($i * 15 + 1, $i * 15 + 15);
      shuffle($col);
      $nums[$i] = array_slice($col,0,5);
    }

    $nums[2][2] = "FREE";

    return $nums;
  }
}

 ?>
