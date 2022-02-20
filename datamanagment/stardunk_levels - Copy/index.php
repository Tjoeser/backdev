<?php
    require_once "model/DataHandler.php";
    include "header.php";
?>

<html>
<!-- <header>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">

    <link rel="stylesheet" href="media/styletables.css"></link>
</header> -->
<body>
<h2>TITLE HEADING</h2>
    <h5>Title description, Dec 7, 2017</h5>

    <?php
    require_once ("model/Products.php");
    require_once ("../../flexlayout/model/display.php");
    $list = new Products(); 
    $res = $list->listProducts();
    $res1 = createTable2($res);
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
