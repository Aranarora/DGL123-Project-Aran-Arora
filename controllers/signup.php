<?php 
class signupContr{
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
        if($this -> emptyInput() = false){
            abort(403);
            $error = "Need to enter all inputs value";
            exit();
        }
        if ($this->invalidUid() = false) {
            abort(403);
            $error = "Enter invalid user name";
            exit();
        }
        if ($this->invalidEmail() = false) {
            abort(403);
            $error = "Enter invalid email";
            exit();
        }
        if ($this->matchPsw() = false) {
            abort(403);
            $error = "Re-entered password not match";
            exit();
        }
        if ($this->matchPsw() = false) {
            abort(403);
            $error = "User or email already exist";
            exit();
        }
    }
   private function emptyInput(){
    $result = 0;
    if(empty($this->uid) || empty($this->psw)|| empty($this->pswrepeat)|empty($this->email)){
        $result = false;
    }
    else{
        $result = true;
    }
    return $result;
    }
    private function invalidUid(){
    $result = 0;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid)){
        $result = false;
    }else {
        $result = true;
    }
    return $result;
    }
    private function invalidEmail()
    {
        $result = 0;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function matchPsw(){
        $result = 0;
        if ($this->psw !== $this->pswrepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    private function uidTakenCheck()
    {
        $result = 0;
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}