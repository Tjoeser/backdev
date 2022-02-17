<?php include_once 'functions.php'; ?>
<link rel="stylesheet" href="Media/styles003.css">
<link rel="stylesheet" href="Media/stylesnav.css">

<div class="navbar">
<?php
$nav = [
    'Home'=>'index.php',
    'Skills'=>'skills.php',
    'Contact'=>'contacts.php',   
    'About'=>'about.php',   
    'Table'=>'tables.php',
    'Opdrachten'=>'opdrachten.php',
    'dropdown' => [
        'link 1'=>'link1.php',
        'link 2'=>'link2.php',
        'link 3'=>'link3.php'
    ],
    'Admin'=>'auth.php',  
];
echo createList($nav, 'navbar'); 

?>