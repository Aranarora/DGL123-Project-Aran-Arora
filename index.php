<?php 
$proj_root = ($_SERVER['REQUEST_URI']);
$proj_root = substr($proj_root, 0, strlen('/DGL123-Project-Aran-Arora/'));

require "router.php";