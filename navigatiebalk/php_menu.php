<!DOCTYPE html>
<html>
<body>
<head>
  <link rel="stylesheet" href="styles001.css">
</head>
<ul>
<?php
 $sites = array (
"Home"=>"home.php",
"News"=>"news.php",
"Contact"=>"contact.php",
"About"=>"about.php",
"Tables"=>"tables.php"
); 

$x = 1;

  foreach ($sites as $site => $link){ 
   echo "<li><a href= $link>$site</a></li>";
  $x++;
 }

?>
</ul>

</body>
</html>