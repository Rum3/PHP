<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html><form method="post" >
    <label for="month">Month:</label>
    <input type="number" name="month" min="1" max="12" required>
    <label for="year">Year:</label>
    <input type="number" name="year" min="1900" max="2023" required>
    <input type="submit" name="submit" value="Generate">
</form>
<?php
/*Създайте PHP скрипт, който генерира списък с дати за даден месец и година. Позволете на потребителя да посочи 
месеца и годината и след това използвайте функцията mktime(), за да генерирате timestamp за първия и 
последния ден от месеца. След това използвайте цикъл, за да генерирате timestamp за всеки ден между тях и 
използвайте функцията date(), за да ги форматирате като низове от дати */

if(isset($_POST['submit'])) {
    $month = $_POST["month"];
    $year = $_POST["year"];
    $first_day = mktime(0, 0, 0, $month, 1, $year);
    $last_day = mktime(0, 0, 0, $month + 1, 0, $year);

    echo "<h2>Dates for " . date("F Y", $first_day) . "</h2>";
    echo "<ul>";
    for ($i = $first_day; $i <= $last_day; $i += 86400) {
        echo "<li>" . date("d M Y", $i) . "</li>";
    }
    echo "</ul>";
}
?>
