<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["confirm-pass"];

    require_once 'bdh.inc.php';
    require_once 'functions.inc.php';
    
    //User Database
    //CREATE TABLE users (
    //  usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    //  usersEmail varchar(128) NOT NULL,
    //  usersUid varchar(128) NOT NULL,
    //  usersPwd varchar(128) NOT NULL
    //);

    if (emptyInputSignup($email, $username, $pwd, $pwdRepeat) !== false) {
       header("location: ../signup-page.php?error=emptyinput");
       exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup-page.php?error=invalidusername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup-page.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup-page.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup-page.php?error=usernamealreadytaken");
        exit();
    }

    createUser($conn, $email, $username, $pwd);

}
else {
    header("location: ../login-page.php");
    exit();
}