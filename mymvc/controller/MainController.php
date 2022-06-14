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
            $op = isset($_GET['op']) ? $_GET['op'] : '';
            switch ($controller)
            {
            case 'contacts':
                    $this->ContactsController->handleRequest($op);
                    break;
            case 'content' :
                echo "1";
                    $this->ContentsController->handleRequest($op);
                    break;
            default:
                $this->ContactsController->collectReadAllContacts();
            }
        } catch (Exception $e) {
            throw $e;
        }
    }
}