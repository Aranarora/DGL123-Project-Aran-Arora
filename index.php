<?php 
$proj_root = ($_SERVER['REQUEST_URI']);
$proj_root = substr($proj_root, 0, strlen('/'));

require "router.php";