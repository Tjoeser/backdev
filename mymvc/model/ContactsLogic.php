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
                    $html = "<a class=\"crudfunctionbutton\" href='index.php'><i class='fa-solid fa-circle-plus'></i> Home</a>";
                    echo $html;
            }
        }
    }

    public function readContacts($id)
    {
        echo "yesh!";
        $sql = "SELECT * FROM contacts WHERE id=$id";
        $result = $this->Datahandler->readsData($sql);
        $res = $result->fetchAll();
        return $res;
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

    public function deleteContact($id)
    {
        $sql = "DELETE  FROM contacts WHERE id=$id";
        $result = $this->Datahandler->deleteData($sql);
        return 'Succesvol verwijderd ' . $result;
    }
}

