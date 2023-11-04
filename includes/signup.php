<?php
if (isset($_POST["submit"])){
    $uid = $_POST["uid"];
    $psw = $_POST["psw"];
    $pswrepeat = $_POST["pswrepeat"];
    $email = $_POST["email"];

    include "../Database.php";
    include "../signup.php";
    include "../controllers/signup.php";
    $signUp = new signupContr($uid, $psw, $pswrepeat, $email);

    $signUp->signupUser();

    header("location: ../?error=none");
}