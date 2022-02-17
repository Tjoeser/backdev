
<?php 
//1 tot en met 5<br>
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>

<br>
<?php
//0 tot en met 10 inclusief 0<br>
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>

<br>

<?php
//alleen tientallen<br>
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>
<br>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./media/styles000.css">
</head>
<body>

<table>
<?php
for ($x = 1; $x <= 7; $x++) {
  echo "<tr><td> $x </td><td> $x </td></tr>";
}

?>


</table>
</table>

<br>

<table>
<?php
$elementen = array("water", "aarde", "vuur", "lucht"); 

foreach ($elementen as $value) {
  echo "<tr><td> $value</td><td> $value</td></tr> ";
}
?>

</table>
</body>
</html>

