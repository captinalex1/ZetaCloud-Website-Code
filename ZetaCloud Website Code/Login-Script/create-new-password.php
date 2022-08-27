<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create New Pass</title>
    </head>
    
    <?php
        $selector = $_GET["selector"];
        $validator = $_GET["validator"];

        if (empty($selector) || empty($validator)) {
            header("location : password-reset.php");
        }
        else {
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
            }
        }
    ?>
    
    <body>
    <div class="container">
        <form action="./includes/reset-password.inc.php" class="form" id="create-new-pass" method="POST">
            <input type="hidden" name="selector" value="<?php echo $selector ?>">
            <input type="hidden" name="validator" value="<?php echo $validator ?>">
            <h1 class="form__title">Create New Password</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="password" name="password" class="form__input" autofocus placeholder="Enter Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="confirmpassword" class="form__input" autofocus placeholder="Confirm Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="confirm">Confirm</button>
            <p class="form__text">
                <a class="form__link" href="./signup-page.php" id="linkCreateAccount">Dont have an Account? Create One!</a>
            </p>
            
            <?php
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $linkAddress = './password-reset.php';

                if (strpos($fullUrl, "error=passwordempty") == true) {
                    echo "<p class='error'>Password is empty!</p>";
                }    
                elseif (strpos($fullUrl, "error=passworddontmatch") == true) {
                    echo "<p class='error'>Passwords dont match!</p>";
                } 
                elseif (strpos($fullUrl, "error=servererror") == true) {
                    echo "<a class='errorlink' href='$linkAddress'>Error with server, please re-submit password reset form.</a>";
                }
                elseif (strpos($fullUrl, "error=invalidtimeortoken") == true) {
                    echo "<a class='errorlink' href='$linkAddress'>Took too long to submit or token error, please re-submit password reset form.</a>";
                }
                elseif (strpos($fullUrl, "error=invalidtoken") == true) {
                    echo "<a class='errorlink' href='$linkAddress'>Invalid Token, please re-submit password reset form.</a>";
                }
                elseif (strpos($fullUrl, "error=invalidtoken") == true) {
                    echo "<a class='errorlink' href='$linkAddress'>Invalid Token, please re-submit password reset form.</a>";
                }
                elseif (strpos($fullUrl, "error=tokenerror") == true) {
                    echo "<a class='errorlink' href='$linkAddress'>Error with the token, please re-submit password reset form.</a>";
                }
                elseif (strpos($fullUrl, "error=updating") == true) {
                    echo "<a class='errorlink' href='$linkAddress'>Error with updating, please re-submit password reset form.</a>";
                }
                elseif (strpos($fullUrl, "error=deleting") == true) {
                    echo "<a class='errorlink' href='$linkAddress'>Error with deleting, please re-submit password reset form.</a>";
                }
            ?>
        </form>
    </div>
    </body>
</html>

<style>
.error {
    color: rgb(255, 72, 72);
}

.errorlink {
    color: rgb(255, 124, 124);
    text-decoration: none;
}

.errorlink:hover {
    color: rgb(255, 72, 72);
}

.success {
    color: rgb(80, 255, 74);
}

html {
    height: 100%;
}

body {
    margin: auto;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    background-color: rgb(0, 153, 0);
}

.form-hidden {
    display: none;
}

.container {
    background-color: rgba(0, 0, 0, 0.473);
    text-align: center;
    flex: 1;
    border-radius: 60px;
    max-width: 400px;
    color: white;
}

.form__link {
    text-decoration: none;
    color: white;
}

.form__link:hover {
    color: rgb(82, 192, 255);
    text-decoration: none;
}

.form__message--success {
    color: rgb(80, 255, 74);
}

.form__message--error {
    color: rgb(255, 72, 72);
}

.form__message {
    color: rgb(255, 72, 72);
}

.form__input-group {
    margin-bottom: 1rem;
}

.form__input {
    flex: 1;
    width: 70%;
    padding: 0.75rem;
    box-sizing: border-box;
    border-radius: 60px;
    border: 3px solid #dddddd;
    outline: none;
    background: rgb(221, 221, 221);
    transition: background 0.2s, border-color 0.2s;
}

.form__input:focus {
    border-color: rgb(118, 250, 255);
    background-color: white;
}

.form__input--error {
    border-color:rgb(255, 72, 72)
}

.form__input-error-message {
    margin-top: 0.5rem;
    font-size: 0.85rem;
    color:rgb(255, 72, 72)
}

.form__button {
    width: 30%;
    font-size: 15px;
    font-weight: bold;
    border: none;
    border-radius: 20px;
    outline: none;
    cursor: pointer;
    background: rgb(255, 255, 255);
}

.form__button:hover {
    background: rgb(0, 129, 22);
    color: white;
}

.form__button:active {
    transform: scale(0.95);
}
</style>            