<?php
require_once 'model/ContactsLogic.php';
require_once 'model/Output.php';
require_once 'model/ContentsLogic.php';

class ContactsController
{
    public function __construct()
    {
        $this->ContactsLogic = new ContactsLogic();
        $this->Output = new Output();
        $this->ContentsLogic = new ContentsLogic();
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
                    $this->collectCreateContact();
                    break;
            case 'reads' :
                    echo "in reads case";
                    $this->collectReadContact($_GET['id']);
                    break;
            case 'update':
            case 'delete':
                    $id = $_GET['id'];
                    $this->collectDeleteContact($id);
                    break;
            case 'choice':
                    $this->collectReadContent(2);
            default:
                $this->collectReadAllContacts();
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function collectReadContact($id)
    {
        $res = $this->ContactsLogic->readContacts($id);
        $contacts = $this->Output->createList($res);
        include 'view/reads.php';
    }


    public function collectReadAllContacts()
    {
        $res = $this->ContactsLogic->readAllContacts();
        $contacts = $this->Output->createTable($res, "");
        $msg = "showing page {} of all pages";
        include 'view/reads.php';
    }

    public function collectReadContent($id)
    {
        $res = $this->ContentsLogic->readContent($id);
        $content = $this->Output->createBlog($res, "");
        $msg = "showing page {} of all pages";
        include 'view/choice.php';
    }


    public function collectCreateContact()
    {
        $contacts = $this->ContactsLogic->createContact();
        include 'view/create.php';
    }

    public function collectUpdateContact()
    {
        // code
    }

    public function collectDeleteContact($id)
    {
        $contacts = $this->ContactsLogic->deleteContact($id);
        include "view/delete.php";
    }

}