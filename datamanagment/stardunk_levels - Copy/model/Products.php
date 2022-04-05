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
    function readProduct($id)
    {
    $sql = "SELECT product_id,product_type_code,supplier_id, product_name, CONCAT('€ ', REPLACE(product_price, '.', ','))product_price, other_product_details FROM products WHERE product_id=$id";
    $result = $this->datahandler->readsData($sql);
    $res = $result->fetchAll();
    return $res;  
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
    
    function listProduct($p = 1)
    {
        $item_per_page = 5;
        $position =(($p - 1) * $item_per_page);

        $sql = "SELECT 
        product_id,
        product_type_code,
        supplier_id,
        product_name,
        CONCAT('€ ', REPLACE(product_price, '.', ','))product_price,
        other_product_details 
        FROM products
        LIMIT $position,$item_per_page";
        $result = $this->datahandler->readsData($sql);
        $pages = $this->datahandler->countPages('SELECT COUNT(*) FROM products');
        return array($result, $pages);
    }
    
    
    function updateProduct($id)
        {
            if (isset($_REQUEST['submit'])) {
            
                $supplier_id = $_REQUEST['supplier_id'];
                $product_type_code = $_REQUEST['product_type_code'];
                $product_name = $_REQUEST['product_name'];
                $other_product_details = $_REQUEST['other_product_details'];
                $product_price = $_REQUEST['product_price'];
            
                $sql = "
                    UPDATE products SET 
                    product_type_code = '$product_type_code',
                    supplier_id = '$supplier_id',
                    product_name =  '$product_name',
                    product_price = '$product_price',
                    other_product_details = '$other_product_details'
                    WHERE product_id = $id";
                $rowcount = $this->datahandler->updateData($sql);
                echo "$rowcount product(s) updated";
            } else {
            
                $result = $this->readUpdateProduct($id);
                $html = "";
                $html .= "<form action=\"index.php?op=update&id=$id\" method=\"post\">";
                $html .= "<label for=\"product_type_code\">Product type code:</label><br>";
                $html .= "<input type=\"text\" id=\"product_type_code\" name=\"product_type_code\" value=\"" . $result[0]['product_type_code'] . "\"><br>";
                $html .= "<label for=\"supplier_id\">Supplier id:</label><br>";
                $html .= "<input type=\"text\" id=\"supplier_id\" name=\"supplier_id\" value=\"" . $result[0]['supplier_id'] . "\"><br>";
                $html .= "<label for=\"product_name\">Product name:</label><br>";
                $html .= "<input type=\"text\" id=\"product_name\" name=\"product_name\" value=\"" . $result[0]['product_name'] . "\"><br>";
                $html .= "<label for=\"product_price\">Product price:</label><br>";
                $html .= "<input type=\"text\" id=\"product_price\" name=\"product_price\" value=\"" . $result[0]['product_price'] . "\"><br>";
                $html .= "<label for=\"other_product_details\">Other product details:</label><br>";
                $html .= "<input type=\"text\" id=\"other_product_details\" name=\"other_product_details\" value=\"" . $result[0]['other_product_details'] . "\"><br><br>";
                $html .= "<input class=\"button\"type=\"submit\" name=\"submit\" value=\"update\">";
                $html .= "</form>";
                echo $html;
            }
        }
    
    function readUpdateProduct($id)
        {
            $sql = "SELECT supplier_id, product_type_code, product_name, other_product_details, CONCAT('€ ',REPLACE(product_price, '.', ','))product_price FROM products WHERE product_id=$id";
            $result = $this->datahandler->readsData($sql);
            $res = $result->fetchAll();
            return $res;
        }
    function deleteproduct($id)
    {
        $sql = "DELETE  FROM products WHERE product_id=$id";
        $result = $this->datahandler->deleteData($sql);
        return $result;
    }
    function searchProducts($term)
    {   
        $sql = "SELECT * FROM products WHERE product_name LIKE '%$term%'";
        $result = $this->datahandler->readsData($sql);
        $res = $result->fetchAll();
        return $res;
        echo "<a href='index.php'><i class='fa-solid fa-house'></i></a>";
    }
}

?>