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
        $sql = $sql = "SELECT product_id, product_type_code, product_name, REPLACE (product_price, '.', ',')product_price, other_product_details FROM products;";
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
        $html = '<ul>';
        foreach ($enteries as $entery) {
          
            foreach($entery as  $value){
              $html .="<li>" .$value. "</li>";    
            }
        }
        $html .= '</ul>';
        return $html;
    }
?>