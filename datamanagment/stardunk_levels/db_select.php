<HTML>
<head>
<link rel="stylesheet" href="../../flexlayout\media\styles0010.css">
</head>

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
  // $stmt = $conn->prepare("SELECT * FROM Stardunk");
  $stmt = $conn->prepare("SELECT  product_name, product_price FROM products  WHERE product_name='Maple'  ");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  $res = $stmt->fetchAll();
  echo createTable2($res);
  
  $name = $res[0]['product_name'];
  $price = $res[0]['product_price'];
  $img = "https://via.placeholder.com/150";
  
  echo  createCard($name, $price, $img);

  // echo $res[0][0];
  }
 catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;
echo "</table>";


?>