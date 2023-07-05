<?php
function generate_regex_less_than_n($n) {
    return "/^-?([0-9]|{$n})$/";
  }
  echo generate_regex_less_than_n(10);