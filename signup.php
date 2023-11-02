<?php
class Signup extends Database{

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