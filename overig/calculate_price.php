<!DOCTYPE html>
<head>
    <title>thijs ze mooi taxi fijltje</title>
</head>
<body>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="km" placeholder="Aantal kilometer...">
    <br>
    <br>
    <input type="time" name="time" placeholder="Op welke tijd vertrekt u...">
    <br>
    <br>
    <label for="date">Datum dat u vertrekt:</label>
    <input type="datetime-local" name="date">
    <br>
    <br>
    <input class="button" type="submit" name="submit" value="Submit">
</form>

<?php
date_default_timezone_set("Europe/Amsterdam");

if (isset($_POST['submit'])){
    $speedkm = 60;

    $kmtarief= 1;
    $laagtarief = 0.25;
    $hoogtarief = 0.45;
    $weekendtarief = 1.15;

    $morning_time = 8;
    $night_time = 18;
    $startweekendtijd = 22;
    $eindweekendtijd = 7;

    $eindagweekend = "Maandag";
    $startdagweekend = "Vrijdag";

    $total = "";

    $km = $_POST['km'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    $subtotaalkm = $km * $kmtarief;
    var_dump($subtotaalkm);

    // $totalminutes = $subtotaalkm 

    if ($time <= $morning_time){
        $tarief = $hoogtarief;
    }else{
        $tarief = $laagtarief;
    } echo $tarief;
}




// if (empty($km)) {
//     echo "km is leeg<br>";
// } else {
//     echo "$km km<br>";
// }

// if(empty($time)){
//     echo"Tijd is leeg<br>";
// }else{
//     echo "$time<br>";
// }
// $date = $_POST['date'];
// if(empty($date)){
//     echo "Datum is leeg<br>";
// }else{
//     echo "$date<br>";
// }



echo $time;
// $totalkm = $km * 1

echo $tarief;


?>

</body>
</html>

