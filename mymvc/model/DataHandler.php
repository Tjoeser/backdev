<?php

class DataHandler
{
    public function __construct()
    {
        // $this->ContactsLogic = new ContactsLogic();
        // $this->Output = new Output();
        // $this->DataHandler = new DataHandler();
    }

    public function __destruct()
    {
        $this->dbh = null;
    }

    public function createData($sql)
    {
        $this->dbh->query($sql);
        return $this->lastInsertId();
    }

    public function readData($sql)
    {
        return $this->query($sql);
        // return $this->dbh->query($sql,PDO::FETCH_ASSOC);
    }

    public function readsData($sql)
    {
        // $this->query($sql);
        return $this->dbh->query($sql, PDO::FETCH_ASSOC);
    }

    public function updateData($sql)
    {
        $this->query($sql);
        return $this->sth->rowCount();
    }

    public function deleteData($sql)
    {
        $sth = $this->dbh->query($sql);
        return $sth->rowCount();
    }

    public function query($query)
    {
        $this->sth = $this->dbh->prepare($query);
        return $this->sth->execute();
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

    public function countPages($sql)
    {
        $item_per_page = 5;
        $results = $this->dbh->query($sql);
        $get_total_rows = $results->fetch();

        // Breaking total records into pages
        $pages = ceil($get_total_rows[0] / $item_per_page);
        return $pages;
    }

    function listContacts($p = 1)
    {
        $item_per_page = 5;
        $position =(($p - 1) * $item_per_page);

        $sql = "SELECT * FROM contacts";
        $result = $this->datahandler->readsData($sql);
        return $result;
    }
}

?>