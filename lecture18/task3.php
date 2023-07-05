<html lang="en">
<body> 
<form method=post>
<p>NAME <input type="text" name="name"></p> <br>
<p>LOCATION <input type="text" name="location"></p> <br>
<p>INPUT <input type="text" name="input"></p> <br>
<input type="submit" name="submit" value="submit"> <br>

<?php
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$location = $_POST['location'];
$input = $_POST['input'];
$path = $location.'/'.$name;

$file_name = fopen($name,'a');
fwrite($file_name,$input);
fclose($file_name);
}
?>


</body>
</html>