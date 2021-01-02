<?php

namespace Brain\Games\Utilites\Prime\Num;

function isPredicat($num) {
    for($i = 2; $i < $num; $i += 1) {
      if ($num % $i === 0) {
          return false;
      }
    }
    return true;
}