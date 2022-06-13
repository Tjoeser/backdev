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

            $op = isset($_GET['op']) ? $_GET['op'] : '';
            switch ($op)
            {
            case 'create':
                    $this->ContactsController->collectCreateContact();
                    break;
            case 'reads' :
                    $this->ContactsController->collectReadContact($_GET['id']);
                    break;
            case 'update':
            case 'delete':
                    $id = $_GET['id'];
                    $this->ContactsController->collectDeleteContact($id);
                    break;
            case 'choice':
                    $this->ContentsController->collectReadContents();
                    break;
            case 'createcontent':
                    $this->ContentsController->collectCreateContent();
                    break;
            case 'readcontent':
                $this->ContentsController->collectReadContent($_GET['id']);
                break;
            case 'updatecontent':
            case 'deletecontent':
                    $id = $_GET['id'];
                    $this->ContentsController->collectDeleteContent($id);
                    break;
            default:
                $this->ContactsController->collectReadAllContacts();
            }
        } catch (Exception $e) {
            throw $e;
        }
    }
}