<table>
<?php

   $cars = array
        (
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15),

    );

    $i = 0;
    foreach ($cars as $innerCar) {
        if ($i == 0) {
            echo "<table style='display:inline;'>";
            echo "<tbody>";
   }
        echo "<tr>";
        foreach ($innerCar as $car) {
            echo "<td>$car</td>";
   }
        echo "</tr>";
        if ($i == 5) {
            echo "</tbody>";
            echo "</table>";
            $i = 0;
  } else {
           $i++;
 }
}
?>
</table>