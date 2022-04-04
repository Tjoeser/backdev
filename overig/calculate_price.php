<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="calculate_price.php">
    <input type="text" name="km" placeholder="Aantal kilometer...">
    <br>
    <br>
    <input type="time" name="time" placeholder="Op welke tijd vertrekt u...">
    <br>
    <br>
    <label for="date">Datum dat u vertrekt:</label>
    <input type="date" name="date">
    <br>
    <br>
    <input class="button" type="submit" value="Submit">
</form>

<?php
//formulier velden in ontvangst nemen
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $km = $_POST['km'];
    if (empty($km)) {
        echo "km is leeg<br>";
    } else {
        echo "$km km<br>";
    }
    $time = $_POST['time'];
    if(empty($time)){
        echo"Tijd is leeg<br>";
    }else{
        echo "$time<br>";
    }
    $date = $_POST['date'];
    if(empty($date)){
        echo "Datum is leeg<br>";
    }else{
        echo "$date<br>";
    }
}



?>

</body>
</html>