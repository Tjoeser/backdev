<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="media/styles003.css">
    <link rel="stylesheet" href="media/styles005.css">
</head>
<body>
<?php
include_once 'functions.php';
include 'header.php';
// include 'adminsidebar.php';
// checkAuth();
?>

<article>
<div class="knop">
    <a href="adminhome.php">
        <button class="button-75"><span class="text">Admin</span></button>
    </a>
</div>
<div class="knop">
    <a href="createfile.php">
        <button class="button-75"><span class="text">Nieuwe bestand maken</span></button>
    </a>
</div>
</article>

<article>
<h1>Nieuwe opdracht aanmaken.</h1>
    <div class="msg">
        <form  method="post" action="adminhome.php" enctype="multipart/form-data">
        <input type="hidden" name="Opdrachtformulier"/>
        <label for="kop">kop:<sup></sup></label><br/>
        <input type="text" name="kop" id="kop" value=""><br/><br/>
        <input type="hidden" name="hiddenbestandsnaam" value="alleopdrachten.php">
        <label for="filetoupload">Afbeelding:</label><br>
        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
        <label for="beschrijving">beschrijfing:</label><br/>
        <textarea name="beschrijving" id="beschrijving" placeholder="Vul beschrijfing in..."></textarea><br/><br/>
        <label for="talen">Programmeertalen:</label><br/>
        <textarea name="talen" id="talen" placeholder="Vul programmeertalen in..."></textarea><br/><br/> 
    <!--  <input class="button" type="submit" name="submit" value="Update" >
        <input class="button" type="submit" name="submit" value="Create"> -->
        <input class="button" type="submit" name="submit" value="Create Assingnment">
        </form>
    </div>
</article>
<?php include 'footer.php';?>



</body>