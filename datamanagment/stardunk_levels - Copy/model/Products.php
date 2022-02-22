<?php

require_once("DataHandler.php");

class Products{
    function __construct()
    {
        $this->datahandler = new Datahandler("localhost","mysql","Stardunk","root","");
    }
    function __destruct()
    {
        
    }
    function listProducts()
    {
        $sql = "SELECT * FROM Products";
        $result = $this->datahandler->readsData($sql);
        $res = $result->fetchAll();
        return $res;
    }
    function createProduct()
    {

    }
    function readProduct()
    {

    }
    function updateProduct()
    {
        
    }
    function deleteProduct()
    {
        
    }
}   function createList()
    {
        
    }
?>