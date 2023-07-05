<?php
function foo($n) {
  if ($n > 0) {
    echo "foo\n";
    bar($n - 1);
  }
}

function bar($n) {
  if ($n > 0) {
    echo "bar\n";
    foo($n);
  }
}

echo foo(4);