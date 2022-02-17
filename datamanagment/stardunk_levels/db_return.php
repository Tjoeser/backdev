<HTML>
<head>
<link rel="stylesheet" href="../../flexlayout\media\styles0010.css">
<link rel="stylesheet" href="../../flexlayout\media\styletables.css">
</head>
<body>


</body>
</HTML>

<?php

include "../../flexlayout/model/display.php";

echo "<table>";
echo "<tr><th>product_id</th><th>product_type_code</th><th>supplier_id</th><th>product_name</th><th>product_price</th><th>other_product_details</th></tr>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Stardunk";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM products ");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  $res = $stmt->fetchAll();
  echo createTable($res);
  

  }
 catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;
echo "</table>";


?>