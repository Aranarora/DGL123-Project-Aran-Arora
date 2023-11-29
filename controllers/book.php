<?php 
class bookContr extends Book{
   private $name; 
   private $date; 
   private $time; 

   public function __construct($name, $date, $time){
    $this->name = $name;
    $this->date = $date;
    $this->time = $time;
   }

    public function bookNow()
    {
        $this->setUser($this->name, $this->date, $this->time);
    }
}