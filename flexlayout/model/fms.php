<?php
//file managment system

function showForm($bestandsnaam = "", $foutmelding = "", $inhoud = "", $uit = ""){
    $path = $_SERVER['PHP_SELF'];

    $form = <<<EOF
    <form method="post" action="$path">
    <input type="hidden" name="bestandformulier">
    <label for="bestandsnaam">Bestandsnaam:<sup>*</sup></label><br/>
    <input type="text" name="bestandsnaam" id="bestandsnaam" value="$bestandsnaam" $uit><br/>
    <input type="hidden" name="hiddenbestandsnaam" value="$bestandsnaam">
    <label for="foutmelding">Foutmelding:</label><br/>
    <input type="text" name="foutmelding" id="foutmelding" value="$foutmelding"><br/>
    <label for="inhoud">Inhoud:</label><br/>
    <textarea name="inhoud" id="inhoud" placeholder="Vul uw gegevens in...">$inhoud</textarea><br/><br/>
    <input class="button" type="submit" name="submit" value="Create" $uit>  
    <input class="button" type="submit" name="submit" value="Read" $uit>  
    <input class="button" type="submit" name="submit" value="Update">  
    <input class="button" type="submit" name="submit" value="Delete" $uit>  
    </form>
    EOF;
    echo $form;
}

function createFile($bestandsnaam, $modus, $foutmelding, $inhoud){
    // Code
    // Handle
    $filehandle = fopen($bestandsnaam, $modus) or die($foutmelding);

    // Wegschrijven
    $result = fwrite($filehandle, $inhoud);

    // Controleer of het gelukt is
    if ($result >= 0) {
        $msg = "Bestand gemaakt";
    } else {
        $msg = "Bestand maken is niet gelukt";
    }
    // Sluiten bestand
    fclose($filehandle);

    // Return Laten weten of het gelukt is
    return $msg;
}

function readMyFile($bestandsnaam, $foutmelding){
    // Code
    // Handle
    $filehandle = fopen($bestandsnaam, "r") or die($foutmelding);
    // Inlezen
    $inhoud = fread($filehandle, filesize($bestandsnaam));
    $uit = "disabled";
    fclose($filehandle);
    // Return
    return [$bestandsnaam, $foutmelding, $inhoud, $uit];
}

function deleteFile($bestandsnaam){
    // Code
    // Verwijderen bestand
    $result = unlink($bestandsnaam);

    echo "Resultaat: ".$result. "<br/>";

    // Laten weten of het gelukt is
    if ($result == 1) {
        $msg = "Bestand verwijderd";
    } else {
        $msg = "Bestand verwijderen is niet gelukt";
    }
    return $msg;
}

function updateFile($bestandsnaam, $foutmelding){
    // Start een formulier
    $html = "<form method=\"POST\" action=\"contact.php\">";

    // Inlezen
    $content[] = readMyfile($bestandsnaam, $foutmelding);
    $html .= "Bestandnaam: <input class=\"disabled\" type=\"text\" name=\"bestandsnaam\" value=\"".$bestandsnaam."\" readonly><br><br>";
    $html .= "Errormelding: <input type=\"text\" name=\"foutmelding\"><br><br>";
    $html .= "Inhoud: <textarea name=\"inhoud\" rows=\"5\" cols=\"40\">".$content."</textarea>";
    $html .= "<input type=\"submit\" name=\"submit\" value=\"Create\" />";

    // Wijzigen
    
    // Wegschrijven
    
    // Sluiten
    return $html;
}

function createAssingnment(){
    //gegevens uit de form ophalen
        $kop = $_POST["kop"];
        $bestandsnaam = $_POST['hiddenbestandsnaam'];
        $beschrijving = $_POST["beschrijving"];
        $talen = $_POST["talen"];
    
        $afbeeldingenmap = "../media/";
        $afbeelding = $afbeeldingenmap . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
    
    // Check of het een echte afbeelding is
    //check of er een afbeelding er (goed) is 
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        
        //verplaats afbeelding naar media 
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
                } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $afbeelding)) {
                    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                    }
        //samenstellen van de gegevens in een deel HTML
            $html = "";
            $html.= "<h1>$kop</h1>\r\n";
            $html.= "<img src=\"$afbeelding\" width=\"200\" height=\"200\">";
            $html.= "<h2>beschrijving:</h2>\r\n";
            $html.= "<p>$beschrijving</p>";
            $html.= "<h2>programeertalen:</h2>\r\n";
            $html.= "<p>$talen</p>";
            $html.=""; 
    
        // het html resultaat opslaan in alleopdrachten.php
                }
?>