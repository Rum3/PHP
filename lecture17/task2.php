<html lang="en">
<body> 
<form method=post>
<p>NAME:<input type="text" name="name"> <br></p>
<p>AGE:<input type="text" name="age"> <br></p>
<p>E-MAIL:<input type="text" name="email"> <br></p>
<input type="submit" value="Submit"> <br>

<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $age = $_POST['age'];
   echo "Име: $name ,години: $age ,поща: $email";
?>

</body>
</html>