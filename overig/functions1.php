<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (empty($_POST["bestandsnaam"])){
        echo "niks ingevoerd in bestandsnaam";
    }
    //welke knop is gebruikt
    $knop = $_POST['submit'];

    //actie uitvoeren
    switch ($knop) {
        case "Create":
            if (empty($_POST["foutmelding"])){
                echo "niks ingevoerd in foutmelding";
            }
            echo"<br>";
            if (empty($_POST["inhoud"])){
                echo "niks ingevoerd in inhoud";
            }
            echo createFile	($_REQUEST ['bestandsnaam'], $_REQUEST ['foutmelding'], $_REQUEST ['inhoud']);  
            break;
        case "Delete":
            if (empty($_POST["foutmelding"])){
                echo "niks ingevoerd in foutmelding <br>";
            }
            if (empty($_POST["inhoud"])){
                echo "niks ingevoerd in inhoud";
            }
            deleteFile($_POST["bestandsnaam"]);
            echo "Delete gekozen";
            break;
        case "Read":
            readfile($_POST["bestandsnaam"],"Het is niet gelukt");
            break;
        case "Update":
            updateFile("test123", "Niet gelukt");
            break;
        default:
            echo "Niks gekozen";
            break;
    }
    //checken of het is gelukt
};

function createFile($filename, $errormessage, $text){
    $filehandle = fopen($filename, "w") or die ($errormessage);
    $resultaat = fwrite($filehandle, $text);
    if ($resultaat >= 0){
        $msg = "Uw bestand is gemaakt!";
    } 
    else{
        $msg = "Maken is niet gelukt";
    }
    fclose($filehandle);
    return $msg;
};

function readMyFile ($filename,$errormessage){
    $filehandle = fopen($filename, "r") or die($errormessage);
    $output= fread($filehandle,filesize($filename));
    fclose($filehandle);
    return $output;
}


function deleteFile($filename){
    //verwijdert bestand
    $resultaat = unlink($filename);

    echo "Resultaat: ".$resultaat. "<br/>"; 
    
    if( $resultaat == 1){
        $msg= "bestand succesvol verwijdert";
    }
    else{
        $msg= "Bestand verwijderen niet gelukt";
    }
    return $msg;
}

function updateFile($filename, $errormessage){
    $html = "<form method=\"post\"action=\"functions1.php\">";
        $content = readMyfile($filename, $errormessage);
        $html .= "bestandsnaam: <input type=\"text\" id=\"bestandsnaam\" name=\"bestandsnaam\" value=\"". $filename. "\"readonly<br>";
        $html .= "<br><br>foutmelding: <input type=\"text\" name=\"foutmelding\"><br>"; 
        $html .= "<br>inhoud:<br> <textarea name=\"inhoud\" rows=\"5\" cols=\"40\">".$content."</textarea><br>";
        $html .= "<input type=\"submit\"name=\"submit\"value=\"Update\">";
        $html .= "</form>";
    echo $html;
}
//echo createFile	($_REQUEST ['bestandsnaam'], $_REQUEST ['foutmelding'], $_REQUEST ['inhoud']);
//echo readFile($_REQUEST ['bestandsnaam'],'ken het niet');
//deleteFile("test.txt");

?>