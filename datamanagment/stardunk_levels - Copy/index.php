<?php
require_once('header.php');
?>
<h2>TITLE HEADING</h2>
<h5>Title description, Dec 7, 2017</h5>
<a class="button" href="./index.php?op=create"><i class="fa-regular fa-square-plus"></i>Create new product</a>

<form method="POST" action="index.php?op=search">
    <input type="text" id="searchterm" name="searchterm" value="">
    <input class="button" type="submit" value="Search"><i class="fa-solid fa-magnifying-glass"></i>
    <button type="submit" class="button" formaction="index.php">Home</button>
</form> 


<?php
require_once('model/Products.php');
require_once('model/Output.php');

$products = new Products();
$output = new Output();


$op = isset($_GET['op']) ? $_GET['op'] : '';
switch ($op) {
    case 'create':
        if(isset($_GET['flag']) ){
            echo'test';
            $res=$products->createProduct();
            echo $output->createTable($res, "");
        }else{
        $html = "";
        $html .= "<form action=\"index.php?op=create&flag=1\" method=\"post\">";
        $html .= "<label for=\"product_type_code\">Product type code:</label><br>";
        $html .= "<input type=\"text\" id=\"product_type_code\" name=\"product_type_code\" value=\"\"><br>";
        $html .= "<label for=\"supplier_id\">Supplier id:</label><br>";
        $html .= "<input type=\"text\" id=\"supplier_id\" name=\"supplier_id\" value=\"\"><br>";
        $html .= "<label for=\"product_name\">Product name:</label><br>";
        $html .= "<input type=\"text\" id=\"product_name\" name=\"product_name\" value=\"\"><br>";
        $html .= "<label for=\"product_price\">Product price:</label><br>";
        $html .= "<input type=\"text\" id=\"product_price\" name=\"product_price\" value=\"\"><br>";
        $html .= "<label for=\"other_product_details\">Other product details:</label><br>";
        $html .= "<input type=\"text\" id=\"other_product_details\" name=\"other_product_details\" value=\"\"><br><br>";
        $html .= "<input class=\"button\" type=\"submit\" name=\"submit\"value=\"create\">";
        $html .=     "</form>";
        echo $html;
        }
        break;
    case 'read':
        $id = $_GET['id'];
        $res = $products->readProduct($id);
        echo $output->createlist($res);
        break;
    case 'update':
        //call update functie
        $products->updateProduct($_REQUEST['id']);
        break;
    case 'delete':
        $id = $_GET['id'];
        $res = $products->deleteproduct($id);
        return $res;
        break;
    case 'search':
        $res = $products->searchProducts($_POST['searchterm']);
        echo $output->createTable($res, "");
        break;
    case 'readpage':
        collectReadPagedProducts($_GET['p']);
        break;
    default:
        collectReadPagedProducts('1');
        break;
}

function collectReadPagedProducts($p)
{
    global $products, $output;
    $res = $products->ListProduct($p);
    echo $output->createTable($res[0], "");
    echo $output->createPageButton($res[1]);
    echo "<br>Showing page {$p} of all products";
}


?>
<div class="fakeimg" style="height:200px;">Image</div>
<p>Some text..</p>
<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
<br>

<br>
<h2>TITLE HEADING</h2>
<h5>Title description, Sep 2, 2017</h5>
<div class="fakeimg" style="height:200px;">Image</div>
<p>Some text..</p>
<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
require_once('footer.php')
<?php
require_once('footer.php');
?>