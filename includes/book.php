<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
    $date = htmlspecialchars($_POST["date"], ENT_QUOTES, 'UTF-8');
    $time = htmlspecialchars($_POST["time"], ENT_QUOTES, 'UTF-8');

    include "../Database.php";
    include "../book.php";
    include "../controllers/book.php";
    $booknow = new bookContr($name, $date, $time);

    $booknow->bookNow();

    echo("<script>alert('User Registered');window.location.href='/DGL123-Project-Aran-Arora/';</script>");

}