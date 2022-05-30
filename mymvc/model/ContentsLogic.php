<?php
require_once 'Datahandler.php';

class ContentsLogic{

    public function __construct()
    {
        $this->Datahandler = new Datahandler("localhost", "mysql", "mvc", "root", "");
    }

    public function __destruct()
    {
        // code
    }

    public function readContent($id)
    {
        echo "yesh!";
        $sql = "SELECT * FROM contacts WHERE id=$id";
        $result = $this->Datahandler->readsData($sql);
        $res = $result->fetchAll();
        return $res;  
    }
    public function ReadAllContent()
    {
        try {
                $sql = "SELECT * FROM content";
                $result = $this->Datahandler->readsData($sql);
                //$result->setFetchMode(PDO::FETCH_ASSOC);
                $res = $result->fetchAll();
                return $res;
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function updateContent()
    {
        //Code
    }

    public function deleteContent($id)
    {
        $sql = "DELETE  FROM contents WHERE id=$id";
        $result = $this->Datahandler->deleteData($sql);
        return 'Succesvol verwijderd ' . $result;
    }
}
?>