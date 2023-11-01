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
}