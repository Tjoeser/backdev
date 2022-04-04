<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>

<!-- <form method="POST" action="calculate_price.php">
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
</form> -->

<?php

$html = "";
$html .= "<form method=\"post\">";
$html .= "<label for=\"km\">km:</label>";
$html .= "<input type=\"text\" id=\"km\" name=\"km\" placeholder=\"Vul het aantal km in...\" value=\"\"><br>";
$html .= "<br>";
$html .= "<label for=\"time\">Vertrek tijd:</label>";
$html .= "<input type=\"time\" id=\"time\" name=\"time\" placeholder=\"Vul de vertrek tijd in...\" value=\"\"><br>";

$html .= "<br>";
$html .= "<label for=\"date\">date:</label>";
$html .= "<select id=\"date\" name=\"date\" placeholder=\"Selecteer de dag...\" value=\"\"><br>";
$html .= "<option value=\"Maandag\">Maandag</option>";
$html .= "<option value=\"Dinsdag\">Dinsdag</option>";
$html .= "<option value=\"Woensdag\">Woensdag</option>";
$html .= "<option value=\"Donderdag\">Donderdag</option>";
$html .= "<option value=\"Vrijdag\">Vrijdag</option>";
$html .= "<option value=\"Zaterdag\">Zaterdag</option>";
$html .= "<option value=\"Zondag\">Zondag</option>";
$html .= "</select>";
$html .= "<br>";
$html .= "<br>";
$html .= "<input type=\"submit\" name=\"submit\" value=\"Bereken\">";
$html .= "</form>";
echo $html;

date_default_timezone_set("Europe/Amsterdam");
// var_dump($_POST);
//formulier velden in ontvangst nemen
if (isset($_REQUEST['submit'])) {
    // Formvelden ophalen
    $km = $_REQUEST['km'];
    $time = $_REQUEST['time'];
    $date = $_REQUEST['date'];

    // Checken of velden leeg zijn
    if (empty($km)) {
        echo 'u heeft nog geen km afstand ingevuld<br>';
    }
    if (empty($time)) {
        echo 'u heeft nog geen tijd ingevuld<br>';
    }
    if (empty($date)) {
        echo 'u heeft nog geen dag ingevuld<br>';
    } else {

    if ($date == 'Vrijdag' and $time > '22:00' 
        or $date == 'Zaterdag' and $time < '08:00' || $time > '18:00' 
        or $date == 'Zondag' and $time < '08:00' || $time > '18:00' 
        or $date == 'Maandag' and $time < '07:00') {

        $total25= ($km * '1') + ($km * '0.45');
        $totalweekend25 = $total25 * '1.25';
        $totaltotalweekend25 = number_format($totalweekend25, 2, ',', '.');

        echo "Door u gekozen: <br>";
        echo "km: $km <br>";
        echo "vertrek tijd: $time<br>";
        echo "Dag: $date <br>";
        echo "Subtotaal: €$totaltotalweekend25";
        } else{
            if ($time < '08:00' || $time > '18:00') {

                $total45 = ($km * '1') + ($km * '0.45');
                $total45format = number_format($total45, 2, ',', '.');

                echo "Door u gekozen: <br>";
                echo "km: $km <br>";
                echo "Vertrek tijd: $time <br>";
                echo "Dag: $date<br>";
                echo "Subtotaal: €$total45format";
            }else{
                   // Normaal 0.25 tarief
                   if ($time > '08:00' || $time < '18:00') {
                       $total25 = ($km * '1') + ($km * '0.25');
                       $total25format = number_format($total25, 2, ',', '.');

                       echo "Door u gekozen: <br>";
                       echo "km: $km <br>";
                       echo "Vertrek tijd: $time <br>";
                       echo "Dag: $date <br>";
                       echo "Subtotaal: €$total25format";
                   }
            }
        }
    }
}


?>

</body>
</html>