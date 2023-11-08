<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $psw = htmlspecialchars($_POST["psw"], ENT_QUOTES, 'UTF-8');
    $pswrepeat = htmlspecialchars($_POST["pswrepeat"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');

    include "../Database.php";
    include "../signup.php";
    include "../controllers/signup.php";
    $signUp = new signupContr($uid, $psw, $pswrepeat, $email);

    $signUp->signupUser();

    header("location: ../?error=none");
}