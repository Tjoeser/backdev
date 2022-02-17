<?php
$cars = array("Volvo", "BMW", "Toyota","tesla");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
echo $cars[$x];
echo "<br>";
}
?>
<br>

<?php
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>