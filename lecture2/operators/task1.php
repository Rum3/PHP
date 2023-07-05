<html lang="en">
<body> 
<form method=post>
Radius of the circle: 
<input type="text" name="radius"> <br>
<input type="submit" value="Submit"> <br>

<?php
    $rad = $_POST['radius'];
    $cir = $rad * 2 * 3.14;
    $area = $rad**2  * 3.14;

    echo "Circumference: $cir";
    echo "Area: $area";  
?>

</body>
</html>