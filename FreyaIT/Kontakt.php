<?php


if($_POST["message"]) {


mail("123davidersej@gmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Freya IT</title>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="FStyle.css" !important>
  <link rel="icon" type="image/x-icon" href="Flogo.jpg">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap');
    </style>

    <style>
        body {
            padding: 0;
            margin: 0;
        }
    </style>


</head>
<body>

  <br><br><br>

  <div class="navreveal">
    <a href="index.html" class="navreveal" style="position: absolute; left: 0;"><img src="FlogoTrans.png" alt=""></a>
    <a class="navreveal" style="width: 50px;" href="javascript:void(0);" onclick="MobileNav()"><img src="menu.png"></a>
  </div>

  <div class="navbar" id="navid">
    <a href="index.html"><img src="FlogoTrans.png" alt="" id="logo"></a>
    <a href="javascript:void(0);" onclick="MobileNav()" id="navclose"><img src="Close.png" alt=""></a>
    <a href="Services.html">Vores services</a>
    <a href="Advice.html">Rådgivning</a>
    <a href="Support.html">Support</a>
    <a href="Om.html">Om os</a>
    <a href="Kontakt.html">Kontakt</a>
  </div>

<script>
    function MobileNav() {
  var x = document.getElementById("navid");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

  <div class="header" style="height: 800px; text-align: center; background-image: url(https://images.unsplash.com/photo-1512428559087-560fa5ceab42?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80);">
    <h1 style="padding: 0; margin: 0;">Kontakt</h1>

    <div style="margin: auto; padding: 0;">
        <div class="contact" data-aos="fade" style="position: absolute; top:40%; vertical-align: middle; left: 0; right: 0;">
        <div class="row" style="text-align: center; padding: 50px 0 50px 0;">
          <h1 style="color: white; font-size: 35px; font-weight: 400; position:static; margin:auto; margin-bottom: 50px;">Hvad kan vi hjælpe med?</h1>
          <div class="column" style="width: 30%; margin-right: 10%;">
                <input type="text" placeholder="Navn *" required>
                <input type="email" placeholder="E-mail *" required> 
              </div>
              <div class="column" style="width: 30%; ">
                <input type="text" maxlength="8" placeholder="Telefonnummer">
                <input type="text" placeholder="Besked (valgfri)">
              </div>
              <a href="" style="width: 200px; display: block; margin: auto; margin-top: 20px;" class="buttonwhite">Ja tak, kontakt mig</a>
          </div>
        </div>
        </div>
        <br><br>
  </div>


  <form method="post" action="MailSimple.php">


    <textarea name="message"></textarea>
    
    
    <input type="submit">
    
    
    </form>



<footer style="padding-top:50px;">

    <div class="row" style="text-align: center;">
    <div class="column" style="margin-right: 25%;">
    <h1 style="text-align: left;">Freya IT</h1>
    <ul>
      <li><a href="tel:26369963">Telefon: +45 26 36 99 63</a></li>
      <li><a href="mailto:erik@freyait.dk">Mail: Erik@freyait.dk</a></li>
      <li><a target="_blank"href="https://www.google.com/maps/place/Lillisvej+3,+9000+Aalborg/@57.0445047,9.8850268,17z/data=!3m1!4b1!4m5!3m4!1s0x464932437f0734cf:0x39011d2ff4b4525f!8m2!3d57.0445018!4d9.8872155">Lillisvej 3, 9000 Aalborg</a></li>
      <li>CVR: 30435338</li>
    </ul>
  </div>
  
  <div class="column">
    <h1 style="text-align: left;">Genveje</h1>
    <ul>
      <li><a href="#fjernsupport">Fjernsupport</a></li>
      <li><a href="#kontakt">Kontakt os</a></li>
      <li><a href="#kontakt">Support</a></li>
      <li><a href="#services">Services</a></li>
    </ul>
  </div>
  </div>
  
  </footer>
  
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        offset: 0,
        duration: 1500,
    });
  </script>
  
  
  </body>
  </html>
  
