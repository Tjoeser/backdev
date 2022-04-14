<?php
require_once 'Datahandler.php';

class ContactsLogic
{
    public function __construct()
    {
        $this->Datahandler = new Datahandler("localhost", "mysql", "mvc", "root", "");
    }

    public function __destruct()
    {
        // code
    }

    public function createContact()
    {
        // Code
    }   

    public function readContact($id)
    {
        $sql = 'SELECT * FROM contacts WHERE id = '.$id;
        $result = $this->DataHandler->readData($sql);
        return $result;
    }

    public function readAllContacts()
    {
        $sql = 'SELECT * FROM contacts';
        $result = $this->Datahandler->readData($sql);
        return $result;
    }
    public function updateContact()
    {
        //Code
    }

    public function deleteContact()
    {
        //Code
    }
}

