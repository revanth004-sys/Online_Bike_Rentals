<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="contactstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header>
            <h1>Contact Us</h1>
            <p>For any difficulty.....We are one click away..... </p>
        </header>
        <div class="content">
            <div class="content-form">
                <section>
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <h2>address</h2>
                    <p>
                       ANITS College. <br>
                       Sanghivalsa. <br>
                       Visakhapatnam
                    </p>
                </section>

                <section>
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <h2>Phone</h2>
                    <p>0891 234567</p>
                </section>

                <section>
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h2>E-mail</h2>
                    <p>motorbike@gmail.com</p>
                </section>
            </div>
        </div>

      <form method = post>
        <div class="form">
            <div class="right">
              <div class="contact-form">
                  <input type="text" name="nm" required>
                  <span>Full Name</span>
              </div>
  
              <div class="contact-form">
                  <input type="E-mail" name="em" required>
                  <span>E-mail Id</span>
              </div>

              <div class="contact-form">
                <input type="text"  name="cn" required>
                <span> Contact no:</span>
             </div>

              <div class="contact-form">
                  <input type="text" name="msg" required>
                  <span> Type your Message....</span>
              </div>
  
              <div class="contact-form">
                  <input type="submit" name="submit">
              </div>
              </div>
            </div>
          </div>
    </form>
        <div class="media">
            <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></li>
        </div>
        <div class="empty">

        </div>
    </div>    
</body>
</html>

<?php
if(isset($_POST["submit"])){
$nm = $_POST['nm'];
$em = $_POST['em'];
$cn = $_POST['cn'];
$msg = $_POST['msg'];
$d = date("Y/m/d");
$conn = mysqli_connect("localhost","root","","bikes");
$sql = "insert into contact_us(name,email,contact,message,date) VALUES('$nm','$em','$cn','$msg','$d')";
$result = mysqli_query($conn,$sql);
if($result){
    echo '<script type="text/javascript">alert("successfully updated")</script>';
    //header('location:contactus.php');
    }
}

?>