<?php 
    //sent data of form to email.php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $to = "test@growitupmarketing.com";
        $subject = $_POST['subject'];
        $mailsubject = "New message from GrowItUp";
        $headers = "From: " . $email;
        $txt = "You have received an email from: " . $name . "\n their Site: ". ".\nMessage:\n" . $message;
        mail($to,$mailsubject,$txt,$headers);
        header("Location: index.php?mailsend");
        header("refresh:2; url=/");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="/images/logo2.png" type="image/x-icon" media="(prefers-color-scheme: dark)">
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon" media="(prefers-color-scheme: light)">
    <link rel="stylesheet" href="/styles/style.css">
    <title>GrowIt</title>
</head>
<body>
    <header  class="  headercontainer">
        <img class="headerimg" src="/images/logo2.png" alt="">
        <ul class="navs">
            <li class="homeli"><a class="hover" href="/">Home</a></li>
            <li class="homeli"><a class="hover" href="/#aboutus">About Us</a></li>
            <li class="homeli"><a class="hover" href="/#service">Our Service</a></li>
            <li class="homeli"><a class="hover" href="/#contact">Contact</a></li>
        </ul>
    </header>
    <div class="backgroundimg1"></div>
    <section class="sectioncontainer">
        <div class="homewelcome">
            <h1 class="hometext1">GrowItUp</h1>
            <p class="hometext2">marketing</p>
            <p class="hometext3">Grow your business with us</p>
            <button class="homebtn">Get Started</button>
        </div>
    </section>
    <div class="backgroundimage2">
    <section class="section2container">
        <div id="aboutus" class="aboutus">
            <h1 class="abouttext1">About Us</h1>
        </div>
        <div class="list">
            <ul class="ul1">
                <li class="aboutli ab1"><i class="bi bi-people-fill"></i><span class="aboutspan as1"> Our team is made of young and aspiring people<br>who want to gain work experience<br> in proffesional workplace</span></li>
                <li class="aboutli ab2"><i class="bi bi-building-fill"></i><span class="aboutspan as2">Our bussines guarantee proffesional made website<br>with specified preferences in short period of time</span></li>
                <li class="aboutli ab3"><i class="bi bi-trophy-fill"></i><span class="aboutspan as3">Our main goal is to help young bussineses and people<br>grow to their best</span></li>
            </ul>
        </div>
        <div class="buttondiv">
            <i class="bic bi-arrow-down-circle-fill"></i>
        </div>
    </div>
    </section>
    <section class="section3container">
        <h1 id="service" class="servicetext">Our Service</h1>
        <div class="ourservicebox">
            <ul class="ourserviceul">
                <li class="serviceli sv1"><i class="bi bis bi-window"></i><br><span>Web<br>Development</span></li>
                <li class="serviceli sv2"><i class="bi bis bi-phone"></i><br><span>Social<br>Media<br>Managment</span></li>
                <li class="serviceli sv3"><i class="bi bis bi-badge-ad"></i><br><span>Social<br>Media<br>Marketing</span></li>
                <li class="serviceli sv4"><i class="bi bis bi-shop"></i><br><span>Digital<br>Marketing<br>&<br>Advertisment</span></li>
                <li class="serviceli sv5"><i class="bi bis bi-pencil-fill"></i><br><span>Logo<br>Designing<br>&<br>Branding</span></li>
                <li class="serviceli sv6"><i class="bi bis bi-youtube"></i><br><span>Video<br>&<br>Art<br>Creating</span></li>
            </ul>
        </div>
    </section>
    <section class="section4container">
        <div class="contactlist">
            <div class="contactformbox">
                <h1 id="contact" class="contacttext">Contact Us</h1>
                <form class="contactform" action="index.php" method="post">
                    <input class="contactinput" type="text" id="name" name="name" placeholder="Name*">
                    <input class="contactinput" type="text" id="email" name="email" placeholder="Email*">
                    <input class="contactinput" type="text" id="" name="subject" placeholder="Website name / Url">
                    <textarea class="contactinput" id="message" name="message" placeholder="Message*"></textarea>
                    <button class="contactbtn" type="submit" name="submit">Send</button>
                </form>
        </div>
    </section>
    <footer class="footercontainer">
        <div class="dane">
            <img class="footerimg" src="/images/logo2.png" alt="">
            <ul class="footerul">
                <li class="footerli li1">GrowItUpMarketing</li>
                <li class="footerli li2"><i class="bi bi-telephone-fill"></i> :+48 504 668 858</li>
                <li class="footerli li3"><i class="bi bi-envelope-fill"></i> :growitupmarketing@gmail.com</li>
                <li class="footerli li4"></li>
            </ul>
        </div>    </footer>
    <script src="/scripts/script.js"></script>
</body>
</html>