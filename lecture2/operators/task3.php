<html lang="en">
<body>
    <form method=post>
     Temperature in celsius: 
    <input type="text" name="celsius"> <br>
    <input type="submit" value="Submit"> <br>
    <?php
     $C = $_POST['celsius'];
     $F = ($C * 9/5) + 32;

     echo "temperature in fahrenheit is $F";
    ?>
</body>
</html>