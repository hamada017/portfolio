<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "portfolio";

    //creation de connection
    $connection = new mysqli($servername, $username, $password, $database);

    //verification de la connection
    if ($connection->connect_error){
        die("connection failed: ". $connection->connect_error);}
        else{
            echo "congrat";
        }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="/personal Portfolio /css/style.css"> -->
</head>
<body>
     <!-- contact section design -->

     <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="#">
            <div class="input-box">
               <input type="text" placeholder="Full Name">
               <input type="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number">
                <input type="text" placeholder="Email Subject">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>
</body>
</html>