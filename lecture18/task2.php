<html lang="en">
<body> 
<form method=post>
<p>NAME <input type="text" name="name"></p> <br>
<p>LOCATION <input type="text" name="location"></p> <br>
<p>CONTENT <input type="text" name="content"></p> <br>
<input type="submit" name="submit" value="submit"> <br>

<?php
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$location = $_POST['location'];
$content = $_POST['content'];
$path = $location.'/'.$name;

$file_name = fopen($name,'w');
fwrite($file_name,$content);
fclose($file_name);
}
?>


</body>
</html>