<?php
require_once 'model/ContactsLogic.php';
require_once 'model/Output.php';
require_once 'model/DataHandler.php';

class ContactsController
{

    public function __construct()
    {
        $this->ContactsLogic = new ContactsLogic();
        $this->Output = new Output();
        $this->DataHandler = new DataHandler();
    }

    public function __destruct()
    {
        // code
    }

    public function handleRequest()
    {
        try {
            $op = isset($_GET['op']) ? $_GET['op'] : '';
            switch ($op) {
                case 'create':
                    $this->collectCreateContact();
                    break;
                case 'read':
                    $this->collectReadContact();
                    break;
                case 'update':
                    break;
                case 'delete':
                    break;
                default:
                    echo "YOohoo";
                    $this->collectReadAllContacts();
                    break;
            }
        } catch (Exception $e) {
            throw $e;
    }
}

    public function collectCreateContact()
    {
        $contacts = $this->ContactsLogic->readContacts();
        include 'view/contacts.php';
    }

    public function collectReadContact()
    {
        // $contacts = $this->Output->createT
    }

    public function collectUpdateContact()
    {
        // code
    }

    public function collectDeleteContact()
    {
        //code
    }

    public function collectReadAllContacts()
    {
        global $contacts, $output, $DataHandler;
        $p = 1;
        echo "yoohoo";
        $res = $output->listContacts($p);
        echo $this->$output->createTable($res, "");
        // include 'view/reads.php';   
    }

}