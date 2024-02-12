<?php 
class Database{
    protected function connect(){
        try{
            $username = "aran";
            $password = "u0(!rZancDg/U@dB";
            $dsn = new PDO('mysql:host=localhost;port=3306;dbname=users;charset=utf8mb4', $username, $password);
            return $dsn;
        }
        catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}