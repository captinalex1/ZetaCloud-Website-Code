<?php
    if (isset($_POST["confirm"])) {

        $selector = $_POST["selector"];
        $validator = $_POST["validator"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];

        if (empty($password) || empty($confirmpassword)) {
            header("location: ../create-new-password.php?selector=?&validator=?error=passwordempty");
            exit();
        }
        else if ($password != $confirmpassword) {
            header("location: ../create-new-password.php?selector=?&validator=?error=passworddontmatch");
            exit();
        }

        $currentDate = date("U");

        require 'bdh.inc.php';

        $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
        $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../create-new-password.php?selector=?&validator=?error=servererror");
        exit();
        //pwdreset for localhost and pwdReset for live server.
    }
    else {
        mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)) {
            header("Location: ../create-new-password.php?selector=?&validator=?error=invalidtimeortoken");
            exit();
        }
        else {
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            if ($tokenCheck === false) {
                header("Location: ../create-new-password.php?selector=?&validator=?error=invalidtoken");
                exit();
            }
            elseif ($tokenCheck === true) {
                $tokenEmail = $row['pwdResetEmail'];

                $sql = "SELECT * FROM users WHERE usersEmail=?";
                $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location: ../create-new-password.php?selector=?&validator=?error=invalidtoken");
                exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                        if (!$row = mysqli_fetch_assoc($result)) {
                            header("location: ../create-new-password.php?selector=?&validator=?error=tokenerror");
                        exit();
                    }
                    else{
                        $sql = "UPDATE users SET usersPwd=? WHERE usersEmail=?";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: ../create-new-password.php?selector=?&validator=?error=updating");
                        exit();
                        }
                        else {
                            $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                            mysqli_stmt_execute($stmt);
                            
                            $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("location: ../create-new-password.php?selector=?&validator=?error=deleting");
                            exit();
                            //pwdreset for localhost and pwdReset for live server.
                        }
                        else {
                            mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                            mysqli_stmt_execute($stmt);
                            header("Location: ../login-page.php?responce=success");
                            }
                        } 
                    }
                }
            }
        }
    }


    }
    else {
        header("location: ../login-page.php?errorwithserverresubmit");
    }
