<?php
if (isset($_POST["submit"])){
    $uid = $_POST["$uid"];
    $uid = $_POST["$psw"];
    $uid = $_POST["$pswrepeat"];
    $uid = $_POST["$email"];

    include "controllers/signup.php";
}