<?php
//het is verplicht dat deze file er is anders gaat die niet door.
require_once("DataHandler.php");

class Products
{
    public function __construct()
    {   
        //om het te beschickbaar te maken in alle andere mehtodes moet je de keyword $this ervoor zetten
        $this->datahandler = new DataHandler("localhost", "mysql", "stardunk", "root", "");   
    }

    public function createProduct()
    {
            //is er een form naar ons verzonden zo ja & hij is alleen aan als op de knop is gedrukt
        if(isset($_POST["submit"])){
            //haal de waarden uit de input velden op
            $product_code = $_POST["product_type_code"];
            $supplier_id = $_POST["supplier_id"];
            $product_name = $_POST["product_name"];
            $product_price = $_POST["product_price"];
            $other_pr =  $_POST["other_product_details"];
        
            //controleer de velden
            if(empty($product_code) or empty($supplier_id) or empty($product_name) or empty($product_price) or empty($other_pr)){
            $msg = "Alle velden zijn vereist";
            return $msg;
            }else{
                //voer de query uit
                $sql = "INSERT INTO Products (product_type_code, supplier_id, product_name, product_price, other_product_details)
                VALUES ('$product_code', '$supplier_id', '$product_name', '$product_price', '$other_pr')";
                //voer de insert query uit en returned id
                $lastid = $this->datahandler->createData($sql);
               
                //$sql = "SELECT * FROM Products WHERE product_id = $lastid";
                $sql = "SELECT * FROM Products";
                $result = $this->datahandler->readsData($sql);
                $res = $result->fetchAll();
                
                //maak een connectie met de output
                $this->output = new output();
                $html = $this->output->createTable($res,"last_insert_product");
                return $html;
            }
        }else{
        $output = new output();
        $html = $output->createInput();
        return $html;  
        }
    }

    public function readProduct(/*$lastid*/)
    {
        // $sql = "SELECT * FROM Products WHERE product_id = $lastid";
        // $result = $this->datahandler->readsData($sql);
        // $res = $result->fetchAll();
        // return $res;
    }

    public function listProducts()
    {
        //query
        $sql = "SELECT * FROM Products";
        $result = $this->datahandler->readsData($sql);
        $res = $result->fetchAll();
        return $res;
    }

    public function updateProduct()
    {

    }

    public function deleteProduct()
    {

    }

    public function __destruct()
    {

    }
}
?>