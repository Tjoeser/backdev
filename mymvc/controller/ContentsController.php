<?php
require_once 'model/ContactsLogic.php';
require_once 'model/Output.php';
require_once 'model/ContentsLogic.php';

class ContentsController
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

    public function handleRequest($op)
    {if (isset($_GET['id'])){
        $id = $_GET['id'];
        }   
        try {
            switch ($op)
            {
            case 'createcontent':
                    $this->collectCreateContent();
                    break;
            case 'readcontent':
                echo "readcontent";
                $this->collectReadContent($id);
                break;
            case 'updatecontent':
            case 'deletecontent':
                    $id = $_GET['id'];
                    $this->collectDeleteContent($id);
                    break;
            default:
                $this->collectReadContents();
            }
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function collectReadContent($id)
    {
        $res = $this->ContentsLogic->readContent($id);
        $content = $this->Output->createBlog($res[0],$res[1]);
        $msg = "showing page {} of all pages";
        include 'view/choice.php';
    }

    public function collectReadContents()
    {
        $res = $this->ContentsLogic->readAllContent();
        $content = $this->Output->createTable($res,"","content", "readcontent");
        $msg = "showing page {} of all pages";
        include 'view/choice.php';
    }

    public function collectCreateContent()
    {
        echo "we zitten in de collectcreatecontent";
        $contacts = $this->ContentsLogic->createContent();
        include 'view/createcontent.php';
    }

    public function collectDeleteContent($id)
    {
        $contacts = $this->ContentsLogic->deleteContent($id);
        include "view/delete.php";
    }
}