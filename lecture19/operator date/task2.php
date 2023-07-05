<form method="POST">
    <label for="date">Въведете дата (ГГГГ-ММ-ДД):</label><br>
    <input type="text" name="date" required><br>
    
    <label for="format">Изберете формат:</label><br>
    <select name="format" required>
        <option value="" selected disabled hidden>Изберете формат</option>
        <?php foreach($formats as $key => $value): ?>
            <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
        <?php endforeach; ?>
    </select><br>
    
    <input type="submit" value="Форматирай">
</form>
<?php
$formats = array(
    "ММ/ДД/ГГГГ" => "m/d/Y",
    "ДД/ММ/ГГГГ" => "d/m/Y",
    "ГГГГ-ММ-ДД ЧЧ:ММ:СС" => "Y-m-d H:i:s"
);

if(isset($_POST["date"]) && isset($_POST["format"])){
    $date = $_POST["date"];
    $format = $_POST["format"];
    
    $dateTime = DateTime::createFromFormat("Y-m-d", $date);
    
    if($dateTime){
        $formattedDate = $dateTime->format($formats[$format]);
        echo "Форматирана дата: ".$formattedDate;
    }
    else{
        echo "Грешка: Невалидна дата!";
    }
}
?>

