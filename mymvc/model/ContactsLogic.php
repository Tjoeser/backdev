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
        echo "yass";
        if (isset($_REQUEST['submit'])) {
            $name = $_REQUEST['fname'];
            $phone = $_REQUEST['phone'];
            $email = $_REQUEST['email'];
            $location = $_REQUEST['location'];
            if (empty($name) or empty($phone) or empty($email) or empty($location)) {
                return "Alle velden zijn vereist";
            } else {
                $sql = "INSERT INTO contacts (name, phone, email, location) 
                            VALUES('$name', '$phone', '$email', '$location')";
                $this->Datahandler->createData($sql);
                return 'Successfully created new contact!';
            }
        }
    }

    public function readContacts()
    {
        // $sql = 'SELECT * FROM contacts WHERE id = ' . $id;
        // $results = $this->Datahandler->readData($sql);
        // return $results;
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

