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

    public function createContent()
    {
        if (isset($_REQUEST['submit'])) {
            $auteur = $_REQUEST['auteur'];
            $titel = $_REQUEST['titel'];
            $images = $_REQUEST['images'];
            $content = $_REQUEST['content'];
            $social = $_REQUEST['social'];
            $datum = $_REQUEST['datum'];
            if (empty($auteur) or empty($titel) or empty($images) or empty($content)or empty($social) or empty($datum)) {
                return "Alle velden zijn vereist";
            } else {
                $sql = "INSERT INTO content (auteur, titel, images, content, social, datum)
                            VALUES('$auteur', '$titel', '$images', '$content','$social','$datum')";
                $this->Datahandler->createData($sql);
                return 'Successfully created new contact!';
                    $html = "<a class=\"crudfunctionbutton\" href='index.php'><i class='fa-solid fa-circle-plus'></i> Home</a>";
                    echo $html;
            }
        }
    }

    public function readContent($id)
    {
        echo "yesh!";
        $sql = "SELECT images, content FROM content WHERE id=$id";
        $result = $this->Datahandler->readsData($sql);
        $res = $result->fetchAll();
        return $res;
    }
    public function ReadAllContent()
    {
        try {
                $sql = "SELECT id, auteur, titel, social, datum FROM content";
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