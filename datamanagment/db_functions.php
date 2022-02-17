<?php
function readData(){
  connectDB("localhost","MyGeusts","root","");
}


function connectDB($servername,$dbname,$username,$password){
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
?>