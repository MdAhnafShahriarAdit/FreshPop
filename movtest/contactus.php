<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
</head>
<body>
  <div class="contact-title">
    <h2>Hlw!</h2>
    <h2>We are always ready to serve you !</h2>
  </div>

    <div class="contact-form">
      <form id="contact-form" method="post" action="">
        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        <br>
        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
        <br>
        <input type="email" name="mail" class="form-control" placeholder="Your EMAIL" required>
        <br>
        <textarea name="message" class="form-control" placeholder="Message" rows="4" required=""></textarea>
        <br>

        <input type="submit" name="submit" class="form-control submit" value="SEND MESSAGE">
      </form>
    </div>
</body>
</html>

<style >
  body{
    margin: 0;
    padding: 0;
    text-align: center;
    background-image:  url(img/c1.webp);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;

  }

  .contact-title
  {
    margin-top: 100px;
    color: #fff;
    text-transform: uppercase;
    transition: all 4s ease-in-out;
  }
 
 .contact-title h2{
  font-size: 22px;
  line-height: 10px;

 }

form{
  margin-top: 50px;
  transition: all 4s ease-in-out;
}

.form-control
{
  width: 600px;
  background: transparent;
  border: none;
  outline: none;
  border-bottom: 1px solid gray;
  color: #fff;
  font-size: 18px;
  margin-bottom: 16px;
}

input
{
  height: 45px;

}

form .submit
{

background: #97a876;
border-color: transparent;
color: #fff;
font-size: 20px;
font-weight: bold;
letter-spacing: 2px;
height: 50px;
margin-top: 20px;

}
</style>

<?php

if (isset($_POST['submit'])) {
 $name = $_POST['name'];
 $subject = $_POST['subject'];
 $mail_form = $_POST['mail'];
 $message = $_POST['message'];


  $mailTo = "shahriarahnaf345@gmail.com";
  $headers = "From: ".$mail_form;
  $txt = "You have received an email from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contactus.php?mailsend ");
}


