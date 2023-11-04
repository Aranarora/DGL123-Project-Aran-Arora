<?php
class loginContr extends Login
{
    private $uid;
    private $psw;

    public function __construct($uid, $psw)
    {
        $this->uid = $uid;
        $this->psw = $psw;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        
        $this->getUser($this->uid, $this->psw);
    }
    private function emptyInput()
    {
        $result = false;
        if (empty($this->uid) || empty($this->psw)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}