<link rel="stylesheet" href="media/styletables.css"></link>
<?php
include "../../flexlayout/model/display.php";
require_once "../../datahandler.php";
//maak functie die formulie in de db plaatst

function createProduct_les()
{
    //is er een form naar ons verzonden zo ja
    if (isset($_POST["submit"])) {
        //haal de waarden uit de input velden op
        $product_code = $_POST["product_type_code"];
        $supplier_id = $_POST["supplier_id"];
        $productname = $_POST["product_name"];
        $product_price = $_POST["product_price"];
        $other_pr =  $_POST["other_product_details"];

        //controleer de velden
        if (empty($product_code) or empty($supplier_id) or empty($productname) or empty($product_price) or empty($other_pr)) {
            $msg = "Alle velden zijn vereist";
        } else {
            //connect met de db en table
            //prepare sql en bind paramters, voer de query uit & stel en query samen
            //insert de data in een row & prepaired stmt
            //maak de velden schoon indien nodig
            //voer het uit
            $sql = "INSERT INTO products (product_type_code, supplier_id, product_name, product_price, other_product_details) 
        VALUES('$product_code', '$supplier_id', '$productname', '$product_price', '$other_pr')";
            $lastid = createData($sql, "localhost", "Stardunk", "root", "");

            //echo "New records created successfully";
            // set the resulting array to associative

            //sluit de db

            $msg = createTable(readData("SELECT * FROM products WHERE product_id=$lastid", "localhost", "Stardunk", "root", ""), "");
            //laat weten of het gelukt is en laat het  resultaat zien



            $con = null;
            return $msg;
        }
    }
}
function handleRequest()
{
    $html = "";
    $operation = isset($_GET['op']) ? $_GET['op'] : '';

    // eert read daarna delete en als laatst update

    switch ($operation) {
        case 'Create':
            include "level1_crud.php";
            include "partial.php";
            return $html;
            break;
        case 'Read':
            $id = $_GET['id'];
            $html .= createList(readOneProduct($id), "");
            include "partial.php";
            return $html;
            break;
        case 'Update':
            $id = $_GET['id'];
            $html .= "update case";
            echo updateProduct($id);
            include "partial.php";
            return $html;
            break;
        case 'Delete':
            try {
                $id = $_GET['id'];
                deleteOneProduct($id);
                $html .= "product deleted";
            } catch (PDOException $e) {
                echo "somting went wrong error:" . "<br>" . $e->getMessage();
            }
            include "partial.php";
            echo "<br><br>";
            return $html;
            break;

        default:
            $html .= "Default case is actief";
            $html .= createTable(readAllProducts(), "");
            include "partial.php";
            return $html;
            break;
    }
}

function controlForm(){
  if($_SERVER["REQUEST_METHOD"] == "POST"){

      $knop = $_POST["submit"];

      switch ($knop) {
          case 'submit':
              $msg = createProduct_les();
              break;
          
          default:
              $msg = "Er is een fout opgetreden";
              break;
              
      }
      return $msg;
  }
}


function readAllProducts()
{
    $sql = "SELECT * FROM products";
    $result = readData($sql, "localhost", "Stardunk", "root", "");
    return $result;
}

function readOneProduct($id)
{
    $sql = "SELECT * FROM products WHERE product_id=$id";
    $result = readData($sql, "localhost", "Stardunk", "root", "");
    return $result;
}

function showArrayForm(){

}
//maak functie die data kan wijzigen op basis van een formulier


function updateProduct($id){
    if (!isset($_POST["submit"])) {
        //haal de waarden uit de input velden op
        $product_type_code = $_POST["product_type_code"];
        $supplier_id = $_POST["supplier_id"];
        $productname = $_POST["product_name"];
        $product_price = $_POST["product_price"];
        $other_pr =  $_POST["other_product_details"];
        //argument ontvangen

        //arguments verwerken in de query
        //query uitvoeren
        //resultaat ontvangen in een array
        $result = readOneProduct($id);
        //formulier samenstellen met de values uit de array
        $html = "";
        $html .= "<form action='db_functions.php'>";
        $html .= "<input type='text' name='product_id' value='$id'placeholder='Product ID...'><br><br>";
        $html .= "<input type='text' name='product_type_code' value='$product_type_code'placeholder='Product Type...'><br><br>";
        $html .= "<input type='text' name='supplier_id' value='$supplier_id' placeholder='Supplier ID...'><br><br>";
        $html .= "<input type='text' name='product_name' value='$productname' placeholder='Product Name...'><br><br>";
        $html .= "<input type='text' name='product_price' value='$product_price' placeholder='Product Price...'><br><br>";
        $html .= "<input type='text' name='other_product_details' value='$other_pr' placeholder='Other Product Details...'><br><br>";
        $html .= "<input type='submit' name='submit' value='submit'>";
        $html .= "</form>";
        //formulier tonen met voor ingevulden veldjes
        return $html;
    }else{
        //als nee
        //nemen de nieuwe values
        //uitvoeren query
        //laat weten of het gelukt is
        $msg = "gelukt niffow!";
        return $msg;
}
}

function deleteOneProduct($id)
{
    $sql = "DELETE FROM products WHERE product_id=$id";
    $result = deleteData($sql, "localhost", "Stardunk", "root", "");
    return $result;
}


function connectDB($servername, $dbname, $username, $password)
{
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
}

function createList($enteries)
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

    function  createData($sql, $servername, $databasename, $username, $password)
    {
        $con = connectDB($servername, $databasename, $username, $password);
        $stmt = $con->prepare($sql);
        $result = $stmt->execute();
        $id = $con->lastInsertId();
        return $id;
    }


    function readData($sql, $servername, $databasename, $username, $password)
    {
        $con = connectDB("$servername", "$databasename", "$username", "$password");

        $stmt = $con->prepare($sql);

        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $result = $stmt->fetchAll();

        $con = null;
        return $result;
    }


    function updateData($sql, $servername, $databasename, $username, $password)
    {
        $con = connectDB("$servername", "$databasename", "$username", "$password");
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $con = null;
    }


    function deleteData($sql, $servername, $databasename, $username, $password)
    {
        $con = connectDB("$servername", "$databasename", "$username", "$password");

        $con->exec($sql);

        $con = null;
    }