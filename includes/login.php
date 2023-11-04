<?php
if (isset($_POST["submit"])) {
    $uid = $_POST["uid"];
    $psw = $_POST["psw"];

    include "../Database.php";
    include "../login.php";
    include "../controllers/login.php";
    $login = new loginContr($uid, $psw);

    $login->loginUser();

    header("location: ../?error=login");
}