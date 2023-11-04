<?php
if (isset($_POST["submit"])) {
    $uid = $_POST["uid"];
    $psw = $_POST["psw"];
    $pswrepeat = $_POST["pswrepeat"];
    $email = $_POST["email"];

    include "../Database.php";
    include "../login.php";
    include "../controllers/login.php";
    $login = new loginContr($uid, $psw, $pswrepeat, $email);

    $login->loginUser();

    header("location: ../?error=none");
}