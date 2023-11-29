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
            echo("<script>alert('Fill all fields');window.location.href='/DGL123-Project-Aran-Arora/';</script>");
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