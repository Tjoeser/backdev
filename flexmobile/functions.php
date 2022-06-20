<?php
session_start();

require_once('model/auth.php');
require_once('model/fms.php');
require_once('model/display.php');

function controlForm(){

    // Controleer eerst of er een formulier is ontvangen
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //  echo "<pre>";
        //  print_r($_POST);
        //  echo "</pre>";

        // Controleer of veld bestandsnaam is ingevuld
        if(isset($_POST['Bestandformulier'])) {
        /* $bestandsnaam = $_POST['hiddenbestandsnaam'] ? $_POST['hiddenbestandsnaam'] : $_POST['bestandsnaam']; */
            if($_POST['hiddenbestandsnaam']){
                $bestandsnaam =$_POST['hiddenbestandsnaam'];
            } else {
                $bestandsnaam =$_POST['bestandsnaam'];
            }  
            if (empty($bestandsnaam)) {
                $msg = "Vul een bestandsnaam in.";
                return $msg;
            }
        }
        // Welke knop is gebruikt
        $knop = $_POST['submit'];
        // Actie uitvoeren
        switch ($knop) {
        case "Create":
           // Actie uitvoeren
           // Controleer of velden foutmelding en de inhoud gevuld zijn
            if (empty($_POST["foutmelding"])) {
                $msg = "Vul een foutmelding in...";
            };
            if (empty($_POST["inhoud"])) {
                $msg = "Vul de inhoud in...";
            };

           // File wegschrijven door functie te callen
            $msg = createFile($bestandsnaam, "w", $_POST["foutmelding"], $_POST["inhoud"]);
            break;

        case "Read":
            // Actie uitvoeren
            $arr[] = readMyFile($bestandsnaam, $_POST["foutmelding"]);
            $msg = $arr[0][2];
            break;

        case "Update":
            // Actie uitvoeren
            //  $msg = updateFile($_POST["bestandsnaam"], $_POST["foutmelding"]);
            $arr[] = readMyFile($bestandsnaam, $_POST["foutmelding"]);
            $msg = showForm($arr[0][0], $arr[0][1], $arr[0][2], $arr[0][3]);
            break;
        case "Delete":
           // Actie uitvoeren
            $msg = deleteFile($bestandsnaam);
            break;
        case "Create Assingnment":
            echo "gelukt!";
            $msg = createAssingnment($_REQUEST);
            var_dump($_REQUEST);
            break;
        case "Login":
            $msg = checkLogin();
            break;
        default:
           // Misschien iets doen
            $msg = "Er is niks te doen...";
            break;
        }
        // Terugmelden
        return $msg;
    } else {
        showForm();
    }
}

?>