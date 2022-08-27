<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZetaCloud</title>
</head>




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
            <a class="top-nav-text" href="/Login-Script/includes/login.inc.php">Log In</a>
        </nav>
    </div>
     <style>
        /* put this back when database wants to work. /Login-Script/includes/login.inc.php*/   
    </style>


    <div class="search-container">
        <form action="https://search.zetacloud.cloud/" method="get" class="search-bar">
            <input required type="text" placeholder="ZetaSearch" name="q">
            <button type="submit"><img src="Test-Website-Images/cloud_search.png"></button>
        </form>
    </div>


    <p class="p2">
        For anyone interested, here are the specs for my server as of 05/11/2021. I provide this here in case you feel like making your own cloud server for a inexpensive price. Keep in mind my stuff is 8th gen and some hardware now may be out of stock. Amazon Affiliate
        links below.
    </p>






    <div class="affiliate-nav">
        <nav>
            <li><a class="a2" href="https://amzn.to/3uFRFom">CPU: Intel Core i7-8700k</a></li>
            <li><a class="a2" href="https://amzn.to/3bjHUES">Motherboard: MSI Z390-A PRO</a></li>
            <li><a class="a2" href="https://amzn.to/3how93B">Storage SSD: 3x SAMSUNG 970 EVO Plus 1TB</a></li>
            <li><a class="a2" href="https://amzn.to/3o9WzY7">Storage HDD: 1x Sedagate 6TB NAS Drive</a></li>
            <li><a class="a2" href="https://amzn.to/3eEF8fh">Storage HDD: 2x WD 4TB Drives</a></li>
            <li><a class="a2" href="https://amzn.to/3hktaJx">RAM: 2x Corsair Vengeance LPX 32GB (2X16GB) DDR4 3200</a></li>
            <li><a class="a2" href="https://amzn.to/3hlK7mS">Case: Cooler Master HAF XB EVO NAS Box</a></li>
            <li><a class="a2" target="_blank" href="https://www.amazon.com/gp/search?ie=UTF8&tag=captinalex1-20&linkCode=ur2&linkId=7df75cb517e49328678b81c9a2b65613&camp=1789&creative=9325&index=pc-hardware&keywords=Gaming">Other cool techy stuff</a></li>
        </nav>
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
        margin-top: 4em;
        max-width: 350px;
        max-height: 250px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 250px;
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
    
    .affiliate-nav {
        background-color: rgba(0, 0, 0, 0.6);
        text-align: center;
        max-width: 480px;
        margin-left: auto;
        margin-right: auto;
        max-height: 300px;
        padding-left: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    
    li {
        color: white;
        margin-bottom: 7px;
    }
    
    a {
        color: white;
        text-decoration: none;
        margin-right: 20px;
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
        margin-top: 4em;
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
</style>