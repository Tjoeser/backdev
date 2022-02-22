<?php
include("header.php");
require_once("./modal/output.php");
$output = new output();
echo "<div>".$output->controlForm()."</div>";
include("footer.php");
?>