<?php
    session_start();
    ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="clairegui.css">
<link rel="icon" href="img/claire-icon.png">
<title>Claire Marie Guimond</title>
</head>

<body>   

<div id="vcontainer"><div id="hcontainer" style="width: 300px;">
<div id="menu">

  <img src="img/claire-icon.png" alt="Me" height=70 width=70 /> Please comment on the design and accessibility of this website <img src="img/claire-icon.png" alt="Me" height=70 width=70 /><br><br>
<center>
<div id="form">



 <?php
   $claire = "claire.guimond@gmail.com";

    echo "You entered ".htmlentities($_POST['answer'])." which is ";

    if ($_SESSION['answer'] == $_POST['answer'] ){
            echo 'correct';

// sanitize input using htmlspecialchars(), see http://stackoverflow.com/a/5788361/1319187
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);		
$message = htmlspecialchars($_POST['message']);

//Send the mail
        $to = $claire;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
            " Here are the details:\n Name: $name \n ".
            "Email: $email\n Message \n $message";
        $headers = "From: $claire\n";
        $headers .= "Reply-To: $email";
        if(mail($to,$email_subject,$email_body,$headers)){
            echo "Success!";
        }else{
            echo "Something went wrong.";
        }

   } 
    else{
            echo 'wrong. We expected '.$_SESSION['answer'];
    }
    ?>



</div>
</center>
<br><br>
<a href="menu.html">Back</a>
</div>
</div></div>


<div class="footer" id="footer">copyright 2019 Claire Marie Guimond unless otherwise noted.</div>
</body>
</html>

