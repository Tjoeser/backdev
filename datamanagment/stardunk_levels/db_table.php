<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Stardunk";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE products (
    product_id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_type_code int(6) NOT NULL,
    supplier_id int(6) NOT NULL,
    product_name VARCHAR(50) NOT NULL,
    product_price DECIMAL(6,2) NOT NULL,
    other_product_details VARCHAR(255) NOT NULL
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Tables created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>