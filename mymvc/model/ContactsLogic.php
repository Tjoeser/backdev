<?php
require_once 'Datahandler.php';

class ContactsLogic
{
    public function __construct()
    {
        $this->Datahandler = new Datahandler("localhost", "mysql", "mymvc", "root", "");
    }

    public function __destruct()
    {
        // code
    }

    public function createContact()
    {
        // Code
    }

    public function readContact()
    {
        $sql = 'SELECT * FROM contacts WHERE id = ' . $id;
        $results = $this->Datahandler->readData($sql);
        return $results;
    }

    public function readAllContacts()
    {
        try {
            
                $sql = "SELECT * FROM contacts";
                $result = $this->Datahandler->readsData($sql);
                //$result->setFetchMode(PDO::FETCH_ASSOC);
                $res = $result->fetchAll();
               return $res;
            
        } catch (Exception $e) {
            throw $e;
        }
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

