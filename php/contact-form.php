
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8" />
        <link rel="stylesheet" href="../css/style.css"> 
    </head>
    <body>
         <header>
            <div class="header-container">
            <div class="header-text">
            <h1>Lucy Gossip</h1>
                <h2>Coding Portfolio</h2>
            </div>
            <div class="header-info">
            <h3>Mobile: 07715569242</h3>
                <h3>Email: lucygossip127@hotmail.com</h3>
            </div>
                <div class="download-cv">
                    <div class="cv-text"><p><a href="">Download CV</a></p></div>
                    
                </div>
                </div>
        </header>
        
        <section id="social-media">
            <div class="social-media-bar">
            <div class="social-media-image"><a href="https://twitter.com/lucygossip" target="_blank"><img alt="" src="../img/twitter.png" /></a></div>
                <div class="social-media-image"><a href="https://www.linkedin.com/in/lucy-gossip-4a71a296/" target="_blank"><img alt="" src="../img/linkedin.png" /></a></div>
            <div class="social-media-image"><a href="https://github.com/lucygossip" target="_blank"><img alt="" src="../img/github-blue.png" /></a></div>
            </div>
        </section>
        
        <nav>
            <div class="navbar">
            <ul>
                <li><a href="../index.html" onclick="openTab('about')">Back</a></li>
            </ul>
                </div>
        </nav>
        
<div class="light-container">
<?php
 
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $visitor_message = "";
    $email_body = "<div>";
     
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div> 
<label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span> 
</div>";
    }
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div> 
<label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span> 
</div>";
    }
     
    if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
        $email_body .= "<div> 
<label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_title."</span> 
</div>";
    }
     
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<div> 
<label><b>Visitor Message:</b></label> 
<div>".$visitor_message."</div> 
</div>";
    }
      
    $recipient = "lucygossip127@hotmail.com";
     
    $email_body .= "</div>";
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}
?>
    </div>
    </body>
    <script type="text/javascript" src="js/myscripts.js"></script>
    </html>