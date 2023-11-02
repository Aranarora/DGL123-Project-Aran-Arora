<?php
class Signup extends Database{

    protected function setUser($uid, $pwd, $email)
    {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?, ?, ?);');
        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->excute(array($uid, $hashedpwd, $email))) {
            $stmt = null;
            abort(403);
            $error = 'The user already exist';
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($uid, $email){
        $stmt = $this->connect()->prepare('SELECT users_uid from LoginTable WHERE users_uid = ? OR users_email = ?;');

        if(!$stmt->excute(array($uid, $email))){
            $stmt = null;
            abort(403);
            $error = 'The user already exist';
            exit();
        }
        $resultCheck = 0;
        if($stmt->rowcount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }
}