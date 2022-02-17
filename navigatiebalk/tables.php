<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styletables.css">
    </head>
<body>
<table>
<?php

include 'php_menu.php';

$list = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

function createTable($list){
	echo"<table>";
        //made for rows
	for ($row = 0; $row < 4; $row++) {
 	 echo "<tr>";
         //made for cols
	    for ($col = 0; $col < 3; $col++) {
	   //use a 2d array with brackets
 	   echo "<td>".$list[$row][$col]."</td>";
 	   }
  	echo "</tr>";
    }
  echo "</table>";
}

createTable($list);
?>
</table>
</body>
</html>