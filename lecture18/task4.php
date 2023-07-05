<html lang="en">
<body> 
<form method=post >
<p>NAME <input type="text" name="name"></p> <br>
<p>LOCATION <input type="text" name="location"></p> <br>
<p>NEW NAME <input type="text" name="newname"></p> <br>
<p>NEW LOCATION <input type="text" name="newlocation"></p> <br>
<input type="submit" value="submit" name="submit"> <br>

<?php
if(isset($_POST['submit'])) {
$file = $_POST['name'];
$location = $_POST['location'];
$path = "$location/$file";

$read = fopen($path,"rb");
$contents = fread($read, filesize($path));
fclose($read);

$newname = $_POST['newname'];
$newlocation = $_POST['newlocation'];
$newcontent = $contents;
$newpath = $newlocation.'/'.$newname;

$file_name = fopen($newname,'w');
fwrite($file_name,$newcontent);
fclose($file_name);

echo "<p>$contents</p>";
}
?>

</body>
</html>