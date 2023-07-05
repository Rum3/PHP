<html lang="en">
<body> 
<form method=post >
<p>NAME <input type="text" name="name"></p> <br>
<p>LOCATION <input type="text" name="location"></p> <br>
<input type="submit" value="submit" name="submit"> <br>

<?php
if(isset($_POST['submit'])) {
$file = $_POST['name'];
$location = $_POST['location'];
$path = "$location/$file";

$read = fopen($path,"r");
$contents = fread($read, filesize($path));
fclose($read);
echo "<p>$contents</p>";
}
?>

</body>
</html>