<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $psw = htmlspecialchars($_POST["psw"], ENT_QUOTES, 'UTF-8');
    include "../Database.php";
    include "../login.php";
    include "../controllers/login.php";
    $login = new loginContr($uid, $psw);

    $login->loginUser();

    header("location: ../?error=login");
}