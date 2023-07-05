<?php
function alternator() {
  $value1 = 1;
  $value2 = 2;
  static $count = 0;
  return ++$count % 2 ? $value1 : $value2;
}
echo alternator(),"\n";
echo alternator(),"\n";
echo alternator(),"\n";
echo alternator(),"\n";
echo alternator(),"\n";
echo alternator(),"\n";
echo alternator(),"\n";
echo alternator(),"\n";
echo alternator(),"\n";
echo alternator(),"\n";
echo alternator(),"\n";
echo alternator(),"\n";
echo alternator();
