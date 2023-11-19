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
            header("location: ../?error=emptyinput");
            exit();
        }
        if ($this->invalidUid() == false) {
            header("location: ../?error=username");
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("location: ../?error=email");
            exit();
        }
        if ($this->matchPsw() == false) {
            header("location: ../?error=passwordmatch");
            exit();
        }
        if ($this->uidTakenCheck() == false) {
            header("location: ../?error=useroremailtaken");
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

    // public function fetchUserId($uid) {
    //     $userId = $this->getUserId($uid);
    //     return $userId[0]["users_id"];
    // }
}