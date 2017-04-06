<?php

    if(isset($_POST['nameCompany'])) {
        $nameCompany = $_POST['nameCompany'];
        $email = 'From: '.$_POST['email']."\r\n";
        $subject = $_POST['subject'];
        $subject = 'Subject: '.$subject.'. From: '.$nameCompany;
        $message = $_POST['message']; 

        $to = "wnddsolutions@gmail.com";
        mail($to, $subject, $message, $email);
        echo "Thank you for your message. We will get back to you within 24 hours.";
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact - WNDD</title>
        <link href="css/foundation.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="/css/contactStyle.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
        <!--- från början ville vi lägga alla fonter i en länk då vi tyckte att det kändes mest rätt, men det resulterade i valideringsfel, därför ligger våra tre nerladdade fonter nu som separata länkar--->
        <link rel="icon" href="bilder/icon.ico">
    </head>
    <body>
        <ul id="socialMediaMenu">
            <li><a target="_blank" href="https://www.facebook.com/"><img src="bilder/Facebook.png" alt="Facebook"></a></li>
            <li><a target="_blank" href="https://twitter.com/?lang=en"><img src="bilder/twitter.png" alt="Twitter"></a></li>
            <li><a target="_blank" href="https://www.youtube.com/"><img src="bilder/youtube.png" alt="Youtube"></a></li>
            <li><a target="_blank" href="https://www.instagram.com/?hl=en"><img src="bilder/IG.png" alt="Instagram"></a></li>
            <li><a target="_blank" href="mailto:wnddsolutions@gmail.com"><img src="bilder/GMail.png" alt="Mail"></a></li>
            <li><a target="_blank" href="https://plus.google.com/"><img src="bilder/GPlus.png" alt="Google+"></a></li>
        </ul>
        <div class="fullwidth row">
            <div class="small-5 columns" id="leftcontact">
                <h1><img src="bilder/logo.png" alt="WNDD Logo"/></h1>
            </div>
            <div class="small-7 columns" id="right">
                <header>
                    <nav>
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="webdesign.html">Web Design</a></li>
                            <li><a href="digitalillustration.html">Digital Illustration</a></li>
                            <li><a id="active" href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </header>
                <h2 id="h2">Contact Us</h2>
                <main>
                    <div class="small-12 columns">
                        <h2 class="h2hide">About WNDD</h2>
                        <p>Hello, we at WNDD love to hear from you about your ideas and feedback. Give us a shout!</p>
                        <form name="contactForm" action="contact.php" method="post">
                            <div class="row">
                                <div class="large-12 columns">
                                  <label for="nameCompany">Name / Company
                                    <input name="nameCompany" id="nameCompany" type="text" placeholder="Willy Wonka / The Chocolate Factory Inc." required />
                                  </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                  <label for="email">Email Address
                                    <input name="email" id="email" type="email" placeholder="willy-wonka@chocolatefactory.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
                                  </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                  <label for="subject">Subject
                                    <select name="subject">
                                      <option id="subject" value="Web Design">Web Design</option>
                                      <option id="subject" value="Digital Illustration">Digital Illustration</option>
                                      <option id="subject" value="Other">Other</option>
                                    </select>
                                  </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                    <label for="message">Message
                                        <textarea name="message" id="message" placeholder="Hey, we would like to order a website for our Chocolate Factory Company!" required></textarea>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                    <input type="submit" name="submit" id="submit" value="SUBMIT"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
        <footer>
            <p>©2017 WNDD, Inc. All rights reserved.</p>
        </footer>
    </body>
</html>