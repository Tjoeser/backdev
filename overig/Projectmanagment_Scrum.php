<!DOCTYPE html>
<html>
<body>

<h1> Scrum </h1>

<?php
$scrumRollen = array("Product owner","Scrum master","Developers",);
$scrlength = count($scrumRollen);

$scrumgebeurtenissen = array("Sprint","Daily scrum","etc",);
$scrlength1 = count($scrumRollen);

echo "<h3>Rollen</h3>";

for($x = 0; $x < $scrlength; $x++) {
    echo "<ul>";
    echo "<li>$scrumRollen[$x]</li>";
    echo "</ul>";
    }   


echo "<br>";
echo "<h3>Gebeurtenissen</h3>";
for($x = 0; $x < $scrlength1; $x++) {
    echo "<ul>";
    echo "<li>$scrumgebeurtenissen[$x]</li>";
    echo "</ul>";
}

?>
</body>
</html>
