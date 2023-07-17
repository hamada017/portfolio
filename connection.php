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
       

            
//    $Name = $_POST['Name'];
//    $Email = $_POST['Email'];
//    $Number = $_POST['Number'];
//    $subject = $_POST['subject'];
//    $text = $_POST['text'];

   //connexion au base de donnee
   $conn = new mysqli('localhost','root','root','portfolio');
   if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
   }else{
       


   if (isset($_POST['submit'])) {
    //code...
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Number=$_POST['Number'];
    $subject=$_POST['subject'];
    $text=$_POST['text'];

  $sql="insert into cv (Name,Email,Number,subject,text) values ('$Name', '$Email', '$Number', '$subject', '$text')";
  $result=mysqli_query($connection,$sql);
  if($result){
  echo "connecté";
  }else{
  echo "echec";
}
}
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

        <form action="#" method="post">
            <div class="input-box">
               <input type="text" placeholder="Full Name" name="Name">
               <input type="email" placeholder="Email Address" name="Email">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number" name="Number">
                <input type="text" placeholder="Email Subject" name="subject">
            </div>
            <textarea name="text" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn" name="submit">
        </form>
    </section>
</body>
</html>