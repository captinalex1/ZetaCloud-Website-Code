<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Reset</title>
    </head>
    
    <body>
    <div class="container">
        <form action="./includes/reset-request.inc.php" class="form" id="Password Reset" method="POST">
            <h1 class="form__title">Reset Password</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" name="email" class="form__input" autofocus placeholder="Enter Email Address...">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit" name="reset-request-submit">Submit Request</button>
            <p class="form__text">
                <a class="form__link" href="./signup-page.php" id="linkCreateAccount">Dont have an Account? Create One!</a>
            </p>

            <?php
            if (isset($_GET["reset"])) {
                if ($_GET["reset"] == "success") {
                    echo "<p class='reset-success'>Check your email!</p>";
                }    
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

.reset-success {
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
    max-width: 350px;
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