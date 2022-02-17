<?php
    require_once "db_functions.php";

?>

<html>
<header>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">

    <link rel="stylesheet" href="media/styletables.css"></link>
</header>
<body>
    <h1>Overview Test</h1>
    <p>Inhoud</p>
    <a class="button" href="./index.php?op=Create">Create</a>
    <a class="button" href="./index.php?op=Read&id=237">Read</a>
    <a class="button" href="./index.php?op=Update&id=237">Update</a>
    <a class="button" href="./index.php?op=Delete&id=240">Delete</a>
    <a class="button" href="./index.php">Home</a>
    <br>
    <br>
    <?php handleRequest(); ?>


</body>
</html>
