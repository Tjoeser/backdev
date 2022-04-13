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

    public function readContact()
    {
        // iets
    }

    public function readContacts()
    {
        try {
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