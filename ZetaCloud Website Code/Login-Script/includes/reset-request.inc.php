<?php
if (isset($_POST["reset-request-submit"])) {

        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $url = "zetacloud.cloud/Login-Script/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
        //use localhost when running this client side and zetacloud.cloud when using server side. 

        $expires = date("U") + 600;
        // This is the SQL Code for phpMyAdmin: 
        // CREATE TABLE pwdReset (
        // pwdResetId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        // pwdResetEmail TEXT NOT NULL,
        // pwdResetSelector TEXT NOT NULL,
        // pwdResetToken LONGTEXT NOT NULL,
        // pwdResetExpires TEXT NOT NULL
        //);
        
        require 'bdh.inc.php';

        $email = $_POST["email"];

        $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
        // pwdReset for live and pwdreset for local server
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../../index.php");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
        }

        $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
        // pwdReset for live and pwdreset for local server
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../../index.php");
            exit();
        }
        else {
            $hashedToken = password_hash($token, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $hashedToken, $expires);
            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

                require '../../sender.php';

                header("location: ../password-reset.php?reset=success");

            } else {
                header("location: ../password-reset.php?reset=error");
        }