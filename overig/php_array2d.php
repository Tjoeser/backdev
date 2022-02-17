<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./media/styles000.css">
</head>
<body>
<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

/*echo "<pre>";
var_dump($cars);
echo "<pre>";*/


echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


for ($row = 0; $row < 4; $row++) { 
  echo "<br><table><tr><td>Row number $row</td></tr><table>";
}
  for ($col = 0; $col < 3; $col++) {
   echo "<table><tr><td><li>".$cars[$row][$col]."</li></td></tr><table>";

}
?>

</body>
</html>