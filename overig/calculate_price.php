<!DOCTYPE html>
<head>
    <title>thijs ze mooi taxi fijltje</title>
</head>
<body>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="km" placeholder="Aantal kilometers...">
    <br>
    <br>
    <label for="leave_date">Datum dat u vertrekt:</label>
    <input type="datetime-local" name="leave_date">
    <br>
    <br>
    <input class="button" type="submit" name="submit" value="Submit">
</form>

<?php
date_default_timezone_set("Europe/Amsterdam");

if (isset($_POST['submit'])){
    calculateTaxiPrice($km = $_POST['km'], $leave_date = $_POST['leave_date']);
}

function calculateTaxiPrice($km, $leave_date){
    $speedkm = 60;
    $minpu = 60;

    $kmtarief= 1;
    $laagtarief = 0.25;
    $hoogtarief = 0.45;
    $weekendtarief = 1.15;
    $tarief = "";

    $morning_time = "8:00:00";
    $night_time = "18:00:00";
    $startweekendtijd = 22;
    $eindweekendtijd = 7;

    $eindagweekend = "Maandag";
    $startdagweekend = "Vrijdag";

    $total = "";

    $km = $_POST['km'];
    $leave_date = $_POST['leave_date'];
    $time = (explode("T",$_POST['leave_date']));

    $subtotaalkm = $km * $kmtarief;

    $ritminuten =  $km / $speedkm * $minpu;

    // if ($time <= $morning_time || $time >= $night_time){
    //     echo $tarief = $laagtarief;
    // } else{ 
    //     $tarief = $hoogtarief; } 


    if ($time > $morning_time && $time < $night_time){
        $tarief = $laagtarief;
        $subtotaalminuten = $tarief * $ritminuten;
    } else{
        echo $tarief = $hoogtarief;
        $subtotaalminuten = $tarief * $ritminuten;
    } 

    echo $subtotaalminuten;
    echo "<br>";
    echo $subtotaalkm;
    echo "<br>";
    echo $tarief;
    echo "<br>";
    echo $time['1'];
    echo "<br>";
    echo strtotime("now"), "\n";
    echo "<br>";
    echo strtotime("10 September 2000"), "\n";
    echo "<br>";
}

?>

</body>
</html>

