<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./Media/stylestables.css">
</head>
<body>

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

// creates a table, needs an array 
function createTable($entries){
	echo"<table>";
        //made for rows
	for ($row = 0; $row < 4; $row++) {
 	 echo "<tr>";
         //made for cols
	    for ($col = 0; $col < 3; $col++) {
	   //use a 2d array with brackets
 	   echo "<td>".$entries[$row][$col]."</td>";
 	   }
  	echo "</tr>";
    }
  echo "</table>";
}

createTable($entries);

$games = array (
  array("Minecraft",999,0),
  array("Fortnite",5,999),
  array("SpellBreak",0,18),
  array("Call of Duty",30,90)
);

createTable($games);

function createList($cars){
  echo"<table>";
        //made for rows
	for ($row = 0; $row < 4; $row++) {
 	 echo "<tr>";
         //made for cols
	    for ($col = 0; $col < 3; $col++) {
	   //use a 2d array with brackets
 	   echo "<td>".$entries[$row][$col]."</td>";
 	   }
  	echo "</tr>";
    }
  echo "</table>";
}

createTable($cars)
?>
</body>
</html>