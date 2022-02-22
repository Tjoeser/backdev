<?php
    require_once "header.php";
    require_once "model/DataHandler.php";
?>

<html>
<body>
<h2>TITLE HEADING</h2>
    <h5>Title description, Dec 7, 2017</h5>

    <a class="button" href="model/DataHandler.php">Create</a>;

    <?php    
    require_once ("model/Products.php");
    require_once ("model/Output.php");
    require_once ("../../flexlayout/model/display.php");
    $list = new Products(); 
    $res = $list->listProducts();
    $res1 = createTable($res);
    var_dump ($res1);
    ?>

    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>


        <?php
        include "footer.php";
        ?>

</body>
</html>
