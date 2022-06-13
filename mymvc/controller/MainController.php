<?php
require_once 'controller/ContactsController.php';
require_once 'controller/ContentsController.php';

class MainController
{
    public function __construct()
    {
        $this->ContentsController = new ContentsController();
        $this->ContactsController = new ContactsController();
    }

    public function __destruct()
    {
        // code
    }

    public function handleRequest()
    {
        try {
            $controller = isset($_GET['controller']) ? $_GET['controller']:"";
            // $op = isset($_GET['op']) ? $_GET['op'] : '';
            switch ($controller)
            {
            case 'contacts':
                    $this->ContactsController->handleRequest();
                    break;
            case 'contents' :
                    $this->ContentsController->handleRequest($_GET['id']);
                    break;
            default:
                $this->ContactsController->collectReadAllContacts();
            }
        } catch (Exception $e) {
            throw $e;
        }
    }
}