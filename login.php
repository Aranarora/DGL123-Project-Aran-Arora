<?php
class Login extends Database
{

    protected function getUser($uid, $psw)
    {
        $stmt = $this->connect()->prepare('SELECT users_psw FROM users WHERE users_uid = ? OR users_email = ?;');

        if (!$stmt->execute(array($uid, $psw))) {
        }
    }
}
    