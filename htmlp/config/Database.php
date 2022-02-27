<?php
class Database{
    public $pdo;

    public function __construct()
    {
        try{
            
            $link = new PDO('mysql:host=localhost;dbname=e_commerce_database', 'root', '');
            $this->pdo = $link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
}
?>