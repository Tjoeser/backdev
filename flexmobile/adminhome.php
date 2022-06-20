<link rel="stylesheet" href="Media/styles003.css">
<link rel="stylesheet" href="Media/styles005.css">

<?php
include 'header.php';
// include 'adminsidebar.php';
include_once 'functions.php';
?>

<?checkAuth();?>
<?checkLogin();?>


<article style="height:50; padding-top:10px; padding-left:10px;">
<div class="knop">
    <a href="nieuweopdrachten.php">
        <button class="button-75"><span class="text">Nieuwe opdracht maken</span></button>
    </a>
</div>
<div class="knop">
    <a href="createfile.php">
        <button class="button-75"><span class="text">Nieuwe bestand maken</span></button>
    </a>
</div>

<?php
$name = ($_SESSION["Login"]);

if($name =="Tjoeser"){
    echo "Hey Thijs hoe was je weekend";
}
if($name == "Brayden"){
    echo "Hey schatje";
}
if($name == "Sinaid"){
    echo "eyo Bosnier";
}
if($name == "Leon"){
    echo "Leonardus Patricius Johannes Driesen";
}
if($name == "Floor"){
    echo "Valar morghulis baarmoedergenootje";
}
if($name == "Jarno"){
    echo "heyyyy eitjee!!";
}
if($name == "user"){
    // echo"<p style='margin-left:1000px;'>"."welkom ".$name."<br><br>"."U bent nu de admin"."</p>";
}
echo "<div style='margin-left:1200px;''>"."welkom ".$name."<br><br>"."U bent nu de admin"."</div>";
?>
</article>
