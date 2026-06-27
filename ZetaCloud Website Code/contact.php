<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>


<body>
    <header>
        <h1>Customer Service and Contacts</h1>
        <p1>If you have any question, concerns or need to contact ZetaCloud for anything, this is the place to do it.</p1>
    </header>

    <div class="form">
        <form class="contact_form" action="contactform.php" method="post">
            <input class="contact_inputs" type="text" name="name" placeholder="Full Name">
            <input class="contact_inputs" type="text" name="email" placeholder="Email Address">
            <input class="contact_inputs" type="text" name="subject" placeholder="What Can we help with?">
            <textarea class="contact_inputs_message" name="message" placeholder="Type in responce"></textarea>
            <button class="send_message_button" type="submit" name="send-message">Send Message</button>
            
            <?php
            if (isset($_GET["sending"])) {
                if ($_GET["sending"] == "success") {
                    echo "<p class='email-sent'>Message has been receieved!</p>";
                }    
            }   
            ?>

        </form>
    </div>
    <div class="discord-api">
        <script src='https://cdn.jsdelivr.net/npm/@widgetbot/crate@3' async defer>
                const button = new Crate({
                server: '753504466870861847', // ZetaCloud
                channel: '753504467391086654' // #general
            })
            
            button.notify({
                content: 'Need Support?',
            })
           
        </script>
    </div>
    
    
    <footer>
        <h3>Link to Discord server here: <a href="https://discord.gg/5Eqhzh5">https://discord.gg/5Eqhzh5</a></h3>
        <p3>We are here to help you with any questions you may have. Don't hesitate to email us or ask in the public Discord and we will help you as quickly as we can.</p3>
    </footer>
</body>











<style>
    html {
        height: 100%;
    }

    .discord-api {
        position: fixed;
    }

    .email-sent {
        color: rgb(80, 255, 74);
        font-size: 20px;
        margin-top: 5px;
    }

    .contact_inputs {
        margin: 1rem;
        flex: 1;
        width: 70%;
        padding: 0.75rem;
        box-sizing: border-box;
        border-radius: 20px;
        border: 3px solid #dddddd;
        outline: none;
        background: rgb(221, 221, 221);
        transition: background 0.2s, border-color 0.2s;
    }

    .send_message_button {
        margin: 1rem;
        width: 45%;
        font-size: 15px;
        font-weight: bold;
        border: none;
        border-radius: 20px;
        outline: none;
        cursor: pointer;
        background: rgb(255, 255, 255);
    }

    .send_message_button:hover {
        background: rgb(0, 108, 180);
        color: white;
    }

    .send_message_button:active {
        transform: scale(0.95);
    }

    .contact_inputs_message {
        max-width: 295px;
        min-width: 200px;
        margin-top: 1rem;
        margin-left: auto;
        margin-right: auto;
        flex: 1;
        width: 70%;
        padding: 0.75rem;
        box-sizing: border-box;
        border-radius: 20px;
        border: 3px solid #dddddd;
        outline: none;
        background: rgb(221, 221, 221);
        transition: background 0.2s, border-color 0.2s;
        text-indent: 5px;
        max-height: 35vh;
        
    }
    
    .contact_form {
        background-color: rgba(0, 0, 0, 0.473);
        text-align: center;
        flex: 1;
        border-radius: 60px;
        color: white;
        max-width: 300px;
        max-height: 72vh;
    }
    
    body {
        margin: auto;
        background-color: rgb(0, 87, 145);
    }

    .form {
        margin: auto;
        height: 72vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contact_inputs:focus {
        border-color: rgb(59, 177, 255);
        background-color: white;
    }

    .contact_inputs_message:focus {
        border-color: rgb(59, 177, 255);
        background-color: white;
    }

    header {
        background-color: rgba(0, 0, 0, 0.164);
        text-align: center;
        max-width: fit-content;
        margin: auto;
        border-radius: 30px;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    footer {
        background-color: rgba(0, 0, 0, 0.164);
        text-align: center;
        max-width: fit-content;
        margin-left: auto;
        margin-right: auto;
        border-radius: 30px;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 10px;
        padding-top: 10px;
        margin-top: 20px;
    }

    a {
       text-decoration: none;
       color: #ccffd3;
    }

    a:hover {
       text-decoration: none;
       color: #6afd7d;
    }

    h1 {
        font-size: 40px;
        margin-bottom: 8px;
        color: #6afd7d;
    }

    p1 {
        font-size: 20px;
        color: #6afd7d;
    }


    h3 {
        font-size: 30px;
        margin-bottom: 10px;
        margin-top: -1px;
        color: #6afd7d;
    }

    p3 {
        font-size: 21px;
        color: #6afd7d;
    }
</style>
</html>