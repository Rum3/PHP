<?php
$time =19;

if ($time < 12) {
  goto morning;
} elseif ($time < 18 && $time >= 12) {
  goto afternoon;
} else {
  goto evening;
}

morning:
echo "Добро утро!";
goto end;

afternoon:
echo "Добър ден!";
goto end;

evening:
echo "Добър вечер!";
goto end;

end:
?>