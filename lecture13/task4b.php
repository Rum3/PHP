<?php
function fact($n, $result = 1) {
  if ($n == 0 || $n == 1) {
    return $result;
  } else {
    return fact($n - 1, $n * $result);
  }
}
echo fact(5);

