<?php
require_once 'controller/ContactsController.php';
require_once 'controller/MainController.php';

$contacts = new MainController();
$contacts->handleRequest();