<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>

<br>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $key => $value) {
  echo "$key = $value<br>";
}
?>
<br>
<?php
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
  echo "$year is absolutely fantastic unless your named $fname. <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?>

<br>

<?php
function sum(int $x, int $y){
$z = $x + $y;
return $z;
}

echo "5 + 10 =" . sum(5,10) ."<br>";
echo "5 + 10 =" . sum(20,40) ."<br>";

$datuminnummer = 2005 - sum(20,40);
echo $datuminnummer

?>