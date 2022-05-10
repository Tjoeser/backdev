<?php
require_once 'controller/ContactsController.php';

$contacts = new ContactsController();
$contacts->handleRequest();
?>