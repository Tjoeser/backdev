<?php
require_once 'model/ContactsLogic.php';
require_once 'model/Output.php';
require_once 'model/Datahandler.php';

class ContactsController
{
    public function __construct()
    {
        $this->ContactsLogic = new ContactsLogic();
        $this->Output = new Output();
        $this->DataHandler = new DataHandler('localhost','mvc','contacts', 'root','');
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
            case 'read' :
                    $this->collectReadContact($_GET['id']);
                    break;
            case 'update':
            case 'delete':
            default:
                $this->collectReadAllContacts();
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function collectReadAllContacts()
    {
        $res = $this->ContactsLogic->readAllContacts();
        $contacts = $this->Output->createTable($res, "");
        include 'view/reads.php';
    }

    public function collectReadContact($id)
    {
        $sql = "SELECT * FROM contacts WHERE id='$id'";
        $result = $this->DataHandler->readsData($sql);
        $res = $result->fetchAll();
        return $res;  
    }
    public function collectCreateContact()
    {
        $contacts = $this->ContactsLogic->readContacts();
        include 'view/reads.php';
    }

    public function collectUpdateContact()
    {
        // code
    }

    public function collectDeleteContact()
    {
        // code
    }

}