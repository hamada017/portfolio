
<?php
   $Name = $_POST['Name'];
   $Email = $_POST['Email'];
   $Number = $_POST['Number'];
   $subject = $_POST['subject'];
   $text = $_POST['text'];

   //connexion au base de donnee
   $conn = new mysqli('localhost','root','test');
   if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
   }else{
    
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