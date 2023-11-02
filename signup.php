<?php
class Signup extends Database{

    protected function checkUser($uid, $email){
        $stmt = $this->connect()->prepare('SELECT users_uid from LoginTable WHERE users_uid = ? OR users_email = ?;');

        if(!$stmt->excute(array($uid, $email))){
            $stmt = null;
        }
    }
}