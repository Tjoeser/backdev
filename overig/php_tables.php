<!DOCTYPE html>
<html>
<head>
<h1> AAHHHH!!</h1>
</head>
<body>
<link rel="stylesheet" href="./media/styles000.css">

<table>
 <tr>
  <?php
$x = 1;
while($x <= 10) {
  echo "<td> The number is: $x </td>";
  $x++;
}
  ?>
 </tr>
</table>

<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
 else{ 
  echo "have a good night!";
}

$Cijfer = "4";
 switch ($Cijfer) {
case "1":
echo "Je hebt gekozen voor het cijfer 1!";
break;

case "3":
echo " Je hebt gekozen voor het cijfer 3!";
break;

case "5":
echo "Je hebt gekozen voor het cijfer 5!";
break;

default:
 echo " 1, 3 of 5 droeftoeter!";
}

?>

</body>
</html>