<?php

$dBHost = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "test";

$conn = mysqli_connect($dBHost, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Change Host: 192.168.1.144, Username: ZetaSite, DBName: ZetaCloud_Website, Password:  when done and gonna send to live server. 
//Change Host: localhost, Username: root, DBName: test, Pass: none, when working on local server.