<?php

if (isset($_POST["submit"])) {
    echo "It Worked! :D";
}
else {
    header("location: ../login-page.php");
}