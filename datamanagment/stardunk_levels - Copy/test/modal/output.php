<?php
require_once("./modal/products.php");
class output
{
    function __construct()
    {
       
    }

    public function createTable($entries,$class)
    {
        $html = "";
        $html .='<table class="' .$class. '">';
        foreach ($entries as $entry) 
        {
            $html .="<tr>";
            foreach ($entry as $key => $val) {
                $html .="<td>" .$val. "</td>";
            }
            $html.="</tr>";
        }
        $html.= "</table>";
        return $html;
    }


    public  function controlForm()
    {
        $html = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $knop =  $_REQUEST["submit"];
        }else{
            $knop = $_GET['operation'];
        }
        switch ($knop) {
            case 'create':
                $output = new output();
                $html .= $output->createInput();
                break;
                    
                case 'createproduct':
                $product = new Products();
                $html .= $product->createProduct();    
                break;
                    
                default:
                echo "False";
                break;
            }
        return $html;
    }

    public   function createInput()
    {
    //formulier samenstellen met de values uit de array
    $html = "";
    $html .= "<form action=\"datahandling.php\" method=\"POST\">";
    $html .= "<label for=\"product_type_code\">Product_type_code:</label><br>";
    $html .= " <input type=\"text\" name=\"product_type_code\"></input><br>";
    $html .= "<label for=\"supplier_id\">supplier_id:</label><br>";
    $html .= "<input type=\"text\" name=\"supplier_id\"></input><br>";
    $html .= "<label for=\"product_name\">product_name:</label><br>";
    $html .= "<input type=\"text\" name=\"product_name\"></input><br>";
    $html .= "<label for=\"product_price\">product_price:</label><br>";
    $html .= "<input type=\"text\" name=\"product_price\"></input><br>";
    $html .= "<label for=\"other_product_details\">other product details:</label><br>";
    $html .= "<input type=\"text\" name=\"other_product_details\"></input><br><br>";
    $html .= "<input type=\"submit\" name=\"submit\" value=\"createproduct\" placeholder=\"create\"></input><br>";
    $html .= "</form>";
    return $html;
    }      

    function __destruct()
    {
       
    }
}




?>