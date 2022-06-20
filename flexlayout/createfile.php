<link rel="stylesheet" href="Media/styles003.css">
<link rel="stylesheet" href="Media/styles005.css">

<?php
include 'header.php';
// include 'adminsidebar.php';
include_once 'functions.php';
?>

<?checkAuth();?>

<article>
<div class="knop">
    <a href="adminhome.php">
        <button class="button-75"><span class="text">Admin</span></button>
    </a>
</div>
<div class="knop">
    <a href="Nieuweopdrachten.php">
        <button class="button-75"><span class="text">Nieuwe opdracht maken</span></button>
    </a>
</div>
</article>

<article>
<h1>Nieuwe bestand aanmaken.</h1>
    <div class ="msg"><?= controlForm()?></div><br>
</article>

<?php
include 'footer.php';
?>
