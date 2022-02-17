<?php


function showLastChangedDate($currfilename) {
    //$currfilename = basename($_SERVER['SCRIPT_NAME']);
    $filelastmodified = filemtime($currfilename);
    return "Content last changed: ".date("d F Y H:i:s.", filemtime($currfilename));
    //return $currfilename;
}
echo showLastChangedDate("php_info.php");
echo "<br>";
?>

<?php
//filemtime("php_info.php");
//$currfilename = basename($_SERVER["PHP_SELF"]);
echo date("d F Y H:i:s",filemtime(basename($_SERVER['PHP_SELF'])));
?>
<?php
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
?>

<html>
<body>
<?php
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo $name;
?>

</body>
</html>


<?php
function numberCheck(){
    $number = 2;
    if($number > )
}

?>