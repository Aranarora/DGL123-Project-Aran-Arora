<?php 
class signupContr extends Signup{
   private $uid; 
   private $psw; 
   private $pswrepeat; 
   private $email; 

   public function __construct($uid, $psw, $pswrepeat, $email){
    $this->uid = $uid;
    $this->psw = $psw;
    $this->pswrepeat = $pswrepeat;
    $this->email = $email;
   }

    public function signupUser()
    {
        if($this -> emptyInput() == false){
            echo("<script>alert('Fill all fields');window.location.href='/DGL123-Project-Aran-Arora/';</script>");
            exit();
        }
        if ($this->invalidUid() == false) {
            echo("<script>alert('Invalid Username');window.location.href='/DGL123-Project-Aran-Arora/';</script>");

            exit();
        }
        if ($this->invalidEmail() == false) {
            echo("<script>alert('Invalid Email');window.location.href='/DGL123-Project-Aran-Arora/';</script>");

            exit();
        }
        if ($this->matchPsw() == false) {
            echo("<script>alert('Password not match');window.location.href='/DGL123-Project-Aran-Arora/';</script>");

            exit();
        }
        if ($this->eightchpsw() == false) {
            echo("<script>alert('Password does not meet the requirements! It must be alphanumeric and atleast 8 characters long');window.location.href='/DGL123-Project-Aran-Arora/';</script>");

            exit();
        }
        if ($this->uidTakenCheck() == false) {
            echo("<script>alert('The Username or Email already exist');window.location.href='/DGL123-Project-Aran-Arora/';</script>");
            exit();
        }
        $this->setUser($this->uid, $this->psw, $this->email);
    }
   private function emptyInput(){
    $result = false;
    if(empty($this->uid) || empty($this->psw) || empty($this->pswrepeat) || empty($this->email)){
        $result = false;
    }
    else{
        $result = true;
    }
    return $result;
    }
    private function invalidUid(){
    $result = false;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)){
        $result = false;
    }else {
        $result = true;
    }
    return $result;
    }
    private function invalidEmail()
    {
        $result = false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function matchPsw(){
        $result = false;
        if ($this->psw !== $this->pswrepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function eightchpsw(){
        $result = false;
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $this->pswrepeat)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function uidTakenCheck()
    {
        $result = false;
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}