<?php

class Datahandler
{
    private $host;
    private $dbdriver;
    private $dbname;
    private $username;
    private $password;

    public function __construct($host, $dbdriver, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbdriver = $dbdriver;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try{
            $this->dbh = new PDO ("$this->dbdriver:host=$this->host;dbname=$this->dbname", $this->username,$this->password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected succesfully with ".$this->dbname.".";
            return true;
        } catch (PDOexception $e){
            echo "Connection with".$this->dbname;
        }
    }

    public function  createData($sql)
    {
        $this-> query($sql);
        return $this->dbh->lastInsertId($sql);
    }

    public function readData ($sql)
    {
        $stmt = $this->dbh->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();

        return $result;
    }

    public function updateData($sql)
    {
        $this->query($sql); 
        return $this->sth->rowCount() . " records have been UPDATED";
    }

    public function deleteData($sql,)
    {
        $this-> query($sql);
        return $this->sth->rowCount();
    }

    public function __destruct()
    {
        $this->dbh = null;
    }

    public function query($query)
    {
        $this->sth = $this->dbh->prepare($query);
        return $this->sth->execute();
    }

}


$tester = new dataHandler("localhost", "mysql", "Stardunk", "root", "");
// var_dump($tester->deleteData("DELETE FROM Products WHERE product_id= '45' "));
$sql = "INSERT INTO Products (product_type_code, supplier_id, product_name, product_price, other_product_details) 
VALUES ('1', '2', 'kaas', '1.23', 'small')";
// createdata met return readdata.
$id = $tester->createData($sql);
$sql = "SELECT * From Products WHERE product_id = ".$id;
// var_dump($tester->readData($sql));

$sql = "UPDATE Products SET product_type_code = '6', supplier_id = '12', 
product_name = 'vaseline', product_price = '22.00', 
other_product_details = 'raachsmaal'  WHERE product_id = '135' ";

// var_dump($tester->updateData($sql));

?>