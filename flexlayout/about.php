<?php include 'header.php';?>
<?php include 'sidebar.php';?>

<div class="flexcontainer">
    <?php
    echo createCard("man","Ser Jorah","Bewaker");
    echo createCard("vrouw","Ygritte","Freelancer");
    ?>
</div>
<div class="flexcontainer">
    <?php
    echo createCard("man","Ramsay","Conciërge");
    echo createCard("vrouw","Cersei","Baas");
    ?>
</div>
<div class="flexcontainer">
    <?php
    echo createCard("vrouw","Brienne","Trainer");
    echo createCard("man","Maester Luwin","Dokter");
    ?>
</div>
<div class="flexcontainer">
<?php
    echo createCard("vrouw","Daenerys","Team leider");
    echo createCard("man","Hodor","Deur wacht");
    ?>
</div>

<?php include 'footer.php';?>