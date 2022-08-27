<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZetaCloud</title>
</head>

<?php
    if (!$_SESSION['userid']) {
        header("Location: ./Login-Script/login-page.php");
        exit;
    }
?>



<body>
    <header>
        <h1>ZetaCloud</h1>
    </header>

    <div class="nav-top">
        <nav>
            <a class="top-nav-text" href="https://drive.zetacloud.cloud/login">Cloud Storage</a>
            <a class="top-nav-text" href="">Cloud Gaming</a>
            <a class="top-nav-text" href="">Pricing</a>
            <a class="top-nav-text" href="/Blogs/Crypto/Is-Crypto-Dying/Is-Crypto-Dying-Article.html">Blogs</a>
            <a class="top-nav-text" href="/Login-Script/includes/logout.inc.php">LogOut</a>
        </nav>
    </div>
    
    <div class="search-container">
        <form action="https://search.zetacloud.cloud/" method="POST" class="search-bar">
            <input required type="text" placeholder="ZetaSearch" name="q">
            <button type="submit"><img src="Test-Website-Images/cloud_search.png"></button>
        </form>
    </div>

    <div class="apps">
        <nav>
            <a href="https://testdocs.zetacloud.cloud/"><img class="button-image" src="Test-Website-Images/Doc.png"></a>
        </nav>
        <text>
            <a class="app-text">Cloud Docs</a>
        </text>
    </div>

    <div class="nav-bottom">
        <nav>
            <a class="bottom-nav-text" href="">About</a>
            <a class="bottom-nav-text" href="/contact.html">Contact Us</a>
            <a class="bottom-nav-text" href="">Feedback</a>
            <a class="bottom-nav-text" href="">FAQ</a>
            <a class="bottom-nav-text" href="/privacy.html">Privacy</a>
            <a class="bottom-nav-text" href="">Terms Of Service</a>
            <a class="bottom-nav-text" href="/test.html">Test Pages</a>
        </nav>
    </div>

    <p class="p1">ZetaCloud is still in dev; however, we have some things up and running.</p>
</body>
</html>





<style>
    html {
        height: 100%;
    }
    
    body {
        background-color: black;
        background-image: url(mark-li-.png);
        /* When updating code and using the no live (caddy version) of index, use url(mark-li-.png) to see the image in the preview and then when ready to update the live (caddy version) add url(/Test-Website-Images/mark-li-.png) back into the background image spot (right above this comment*/
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    
    .search-container {
        background-color: rgba(0, 0, 0, 0.7);
        max-width: 350px;
        max-height: 250px;
        border-radius: 250px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 4rem;
    }

    .search-bar {
        max-width: 320px;
        display: flex;
        align-items: center;
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 12px;
        padding-bottom: 12px;
        margin: auto;
    }

    .search-container button img {
        width: 24px;
    }

    .search-container button {
        border: 0;
        border-radius: 50%;
        background-color: rgba(162, 241, 255, 0.767);
        width: 42px;
        height: 42px;
        cursor: pointer;
    }

    .search-container input {
        background: transparent;
        flex: 1;
        border: 0;
        outline: none;
        border-radius: 60px;
        font-size: 15px;
        color: white;
    }

    h1 {
        text-align: center;
        color: green;
        font-size: 70px;
        margin-bottom: 20px;
        margin-top: 20px;
        background-color: rgba(0, 0, 0, 0.7);
        max-height: 80px;
        max-width: 375px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .p1 {
        font-size: 15px;
        color: white;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.6);
        margin-left: auto;
        margin-right: auto;
        max-width: 450px;
        max-height: 70px;
    }
    
    .p2 {
        font-size: 16px;
        color: white;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.6);
        max-width: 600px;
        margin-top: 5em;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 10px;
        max-height: 400px;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    
    .nav-top {
        background-color: rgba(0, 0, 0, 0.5);
        min-height: 50px;
        max-width: 600px;
        text-align: center;
        margin: auto;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 30px;
    }
    
    .nav-bottom {
        background-color: rgba(0, 0, 0, 0.5);
        max-height: 300px;
        max-width: 460px;
        text-align: center;
        margin: auto;
        font-size: 20px;
        padding-bottom: 5px;
        margin-top: 18rem;
    }

    .top-nav-text {
        color: white;
        text-decoration: none;
        margin-right: 20px;
    }

    .bottom-nav-text {
        color: white;
        text-decoration: none;
        margin-right: 20px;
    }

    .bottom-nav-text:hover {
        color: rgb(82, 192, 255);
        text-decoration: none;
    }

    .a2:hover {
        color: rgb(82, 192, 255);
        text-decoration: none;
    }

    .top-nav-text:hover {
        color: rgb(82, 192, 255);
        text-decoration: none;
    }

    .apps {
        background-color: rgba(0, 0, 0, 0.5);
        max-height: 300px;
        max-width: 460px;
        margin: auto;
        margin-top: 4rem;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .button-image {
        width: 50px;
    }

    .app-text {
        color: white;
    }
</style>