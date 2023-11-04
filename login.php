<?php
class Login extends Database
{

    protected function getUser($uid, $psw)
    {
        $stmt = $this->connect()->prepare('SELECT users_psw FROM users WHERE users_uid = ? OR users_email = ?;');

        if (!$stmt->execute(array($uid, $psw))) {
            $stmt = null;
            header("location: ./index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: login.php?error=usernotfound");
            exit();
        }

        $pswHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPsw = password_verify($psw, $pswHashed[0]["users_psw"]);

        if ($checkPsw == false ) {
            $stmt = null;
            header("location: login.php?error=wrongpassword");
            exit();
        }
        
    }
}
    