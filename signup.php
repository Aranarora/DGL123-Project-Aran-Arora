<?php
class Signup extends Database{

    protected function setUser($uid, $psw, $email)
    {
        $stmt = $this->connect()->prepare('INSERT INTO `users`.`users` (users_uid, users_psw, users_email) VALUES (?, ?, ?);');
        $hashedpsw = password_hash($psw, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $hashedpsw, $email))) {
            $stmt = null;
            header("location: ./?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($uid, $email){
        $stmt = $this->connect()->prepare('SELECT users_uid FROM `users`.`users` WHERE users_uid = ? OR users_email = ?;');

        if(!$stmt->execute(array($uid, $email))){
            $stmt = null;
            header("location: ./?error=stmtfailed");
            exit();
        }
        $resultCheck = false;
        if($stmt->rowcount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}