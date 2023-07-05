
<html lang="en">
<body> 
<form method=post>
<input type="text" name="a"> <br>
<input type="text" name="b"> <br>
<input type="text" name="c"> <br>
<input type="submit" value="Submit"> <br>

<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$discriminant = ($b * $b) - (4 * $a * $c);

if ($discriminant < 0) {
    echo "This quadratic equation has no real roots.";
}
else {
    $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminant)) / (2 * $a);

    echo "The roots of the quadratic equation {$a}x^2 + {$b}x + {$c} are: ";
    echo "Root x1 = {$x1} ";
    echo "Root x2 = {$x2} ";
}
?>

</body>
</html>