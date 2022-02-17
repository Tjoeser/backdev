<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="media/styles003.css">
    </head>


<?php include 'header.php';?>
<?php include 'sidebar.php';?>
    <article>
    <h1>Table</h1>
    <?php

    include_once 'functions.php';
    $entries = array(
        array("Naam","Adres","Woonplaats","email"),
        array("Naam","Adres","Woonplaats","email"),
        array("Naam","Adres","Woonplaats","email"),
        array("Naam","Adres","Woonplaats","email"),
    );

echo createTable($entries);

?> 
</article> 
<?php include 'footer.php';?>


</body>
</html> 