<?php
function generate_regex_in_range($min, $max, $include_min=true, $include_max=true) {
  $min_operator = $include_min ? "" : "|{$min}\.?[0-9]*";
  $max_operator = $include_max ? "" : "|{$max}\.?[0-9]*";
  return "/^{$min_operator}(?:{$min}\.?[0-9]*|[{$min}1-9][0-9]*|[{$min}][{$max}0-9]|[{$min}][{$max}][0-9]*)(?:{$max_operator})$/";
}
echo generate_regex_in_range(10, 20, true, true);
