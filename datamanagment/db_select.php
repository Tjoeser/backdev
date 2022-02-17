<link rel="stylesheet" href="..\flexlayout\media\styletables.css">
<?php
include("../flexlayout/model/display.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, firstname, lastname, email, reg_date FROM MyGuests");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  echo createTable2($stmt->fetchAll());
}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

function readData(){
  connectDB("localhost","MyGeusts","root","");
}


function connectDB($servername,$dbname,$username,$password){
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}


?>