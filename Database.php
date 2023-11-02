<?php 
class Database{
    protected function connect(){
        try{
            $username = "root";
            $password = "";
            $dsn = new PDO('mysqli:host=localhost;dbname=LoginTable', $username, $password);
        }
        catch(PDOException $e){
            throw new PDOException($e->getMessage(), $e->getCode());
        }
    }
}