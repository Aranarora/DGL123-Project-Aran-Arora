<?php

$title = 'Profile';

require "views/profile.view.php";

// class ProfileInfoContr extends ProfileInfo{

//     private $userId;
//     private $userUid;

//     public function __construct($userId, $userUid){
//         $this->userId = $userId;
//         $this->userUid = $userUid;

//     }
//     public function defaultProfileInfo(){
//         $profileAbout = "Tell about yourself!";
//         $profileTitle = "Hi! I am " . $this->userUid;
//         $profileText = "Welcome to you profile page!";
//         $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->$userId);
//     }

//     public function updateProfileInfo($about, $introTitle, $introText){
//         if($this->emptyInputCheck($about, $introTitle, $introText) == true){
//             header("location: ../profilesettings.php?error=emptyinput");
//             exit();
//         }
//         $this->setProfileInfo($about, $introTitle, $introText, $this->$userId);

//     }
//     Private function emptyInputCheck($about, $introTitle, $introText){
//         $result;
//         if(empty($about) || empty($introTitle) || empty($introText) ){
//             $result = true;

//         } else{
//             $result = false;
//         }
//         return $result;
//     }

// }