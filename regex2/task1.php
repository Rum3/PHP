<?php
function generate_regex_greater_than_n($n) {
    return "/^{$n}|[{$n}-9][0-9]*$/";
  }
  echo generate_regex_greater_than_n(10);