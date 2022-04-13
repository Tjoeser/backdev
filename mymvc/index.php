<?php
require_once 'control/ContactsController.php';

$contacts = new ContactsController();
$contacts->handleRequest();
?>