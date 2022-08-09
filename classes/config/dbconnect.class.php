<?php

class Db{
    private $user = "root";
    private $password = "";
    private $host = "localhost";
    public $connect;

    public function __construct()
    {
        try {
            $pdo = new PDO('mysql:host='.$this->host.';dbname=xoxo_app',$this->user, $this->password);
            // for errors
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // for fetching data
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); //for limit
            return $this->connect = $pdo;
        } catch (PDOException $e) {
         echo 'ERROR!,connection to databsae failed!'.$e->getMessage();
        }
    }
    
}