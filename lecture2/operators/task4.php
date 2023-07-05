<html lang="en">
<body> 
<form method=post>
<input type="text" name="a"> <br>
<input type="text" name="b"> <br>
<input type="submit" value="Submit"> <br>
<?php
$a = $_POST["a"];
$b = $_POST["b"];

if($a < $b){
    echo var_dump($a);
} elseif($a = $b){
    echo var_dump($b);
} else{
    echo var_dump($a,$b);
}
?>
</body>
</html>