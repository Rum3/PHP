<?php
function fib($n, $a = 0, $b = 1) {
    if ($n == 0) {
      return $a;
    } else if ($n == 1) {
      return $b;
    } else {
      return fib($n - 1, $b, $a + $b);
    }
  }
echo fib(9); 