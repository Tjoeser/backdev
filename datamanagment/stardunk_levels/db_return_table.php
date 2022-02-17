<link rel="stylesheet" href="media\styletables.css">
<link rel="stylesheet" href="media\styles003.css">

<h1>Read Stardunk</h1>

<a href="level1_crud.php" class="button">Create New Products</a>


<?php
include("../../flexlayout/model/display.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Stardunk";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT  *  FROM products");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $endresult = $stmt->fetchAll();

  // var_dump($stmt->fetchAll());
  $gender = "man";
  $name = $endresult[0]["product_name"];
  $role = $endresult[0]["product_price"];
  $img_size = "https://via.placeholder.com/150";

  echo createTable2($endresult);
  // echo createCard($gender,$name,$role,$img_size);

}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$conn = null;

function readData(){
  connectDB("localhost","Stardunk","root","");
}

function connectDB($servername,$dbname,$username,$password){
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

?>