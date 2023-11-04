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

    
}