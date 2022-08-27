<?php
session_start();

if (isset($_POST["teleport"])) {
    
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    require_once 'bdh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login-page.php?error=emptyinput");
        exit();
    }
    loginUser($conn, $username, $pwd);
    }
    else {
        header("location: ../login-page.php");
        exit();
}
