<?php
require_once('DataHandler.php');
class Products
{

    function __construct()
    {
        $this->datahandler = new dataHandler( "localhost", "mysql", "stardunk", "root", "", );
        //$this->datahandler = new Output();
    }
    function __destruct()
    {

    }
    function createProduct()
    {
        $product_code = $_POST["product_type_code"];
        $supplier_id = $_POST["supplier_id"];
        $productname = $_POST["product_name"];
        $product_price = $_POST["product_price"];
        $other_pr =  $_POST["other_product_details"];

        if (empty($product_code) or empty($supplier_id) or empty($productname) or empty($product_price) or empty($other_pr)) {
            $msg = "Alle velden zijn vereist";
        } else {
            $sql = "INSERT INTO products (product_type_code, supplier_id, product_name, product_price, other_product_details) 
        VALUES('$product_code', '$supplier_id', '$productname', '$product_price', '$other_pr')";
            $lastid = $this->datahandler->createData($sql);

             $sql = "SELECT * FROM products WHERE product_id=$lastid";
            
            $result = $this->datahandler->readsData($sql);
            $res = $result->fetchAll();
            //laat weten of het gelukt is en laat het  resultaat zien
            return $res;


        }
    }
    function readMyFile($bestandsnaam, $foutmelding){
        // Code
        // Handle
        $filehandle = fopen($bestandsnaam, "r") or die($foutmelding);
        // Inlezen
        $inhoud = fread($filehandle, filesize($bestandsnaam));
        $uit = "disabled";
        fclose($filehandle);
        // Return
        return [$bestandsnaam, $foutmelding, $inhoud, $uit];
    }
    
    function listProduct()
    {
        $sql = "SELECT 
        product_id,
        product_type_code,
        supplier_id,
        product_name,
        CONCAT('€',REPLACE(product_price, '.', ','))product_price,
        other_product_details FROM products";
        $result = $this->datahandler->readsData($sql);
        //$result->setFetchMode(PDO::FETCH_ASSOC);
        $res = $result->fetchAll();
        echo "<a href='index.php'><i class='fa-solid fa-house'></i></a>";
        return $res;
    }
    
    function updateProduct()
    {
        echo "<a href='index.php'><i class='fa-solid fa-house'></i></a>";
    }
    function deleteproduct()
    {
        echo "<a href='index.php'><i class='fa-solid fa-house'></i></a>";
    }
    function searchProducts($term)
    {   
        $sql = "SELECT * FROM products WHERE product_name LIKE '%$term%'";
        $result = $this->datahandler->readsData($sql);
        var_dump($result);

        echo "<a href='index.php'><i class='fa-solid fa-house'></i></a>";
    }
}

?>