<?php
class Login extends Database
{

    protected function getUser($uid, $psw)
    {
        $stmt = $this->connect()->prepare('SELECT users_psw FROM users WHERE users_uid = ? OR users_email = ?;');

        if (!$stmt->execute(array($uid, $psw))) {
            $stmt = null;
            header("location: ../?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../?error=user-not-found-enter-userid-only");
            exit();
        }

        $pswHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPsw = password_verify($psw, $pswHashed[0]["users_psw"]);

        if ($checkPsw == false ) {
            $stmt = null;
            header("location: ../?error=wrongpassword");
            exit();
        }
        elseif ($checkPsw == true){
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_psw = ?;');
            
            if (!$stmt->execute(array($uid, $uid, $psw))) {
                $stmt = null;
                header("location: ../?error=stmtfailed");
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../?error=usernotfound");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruid"] = $user[0]["users_uid"];
            $stmt = null;
        }
    }
}
    