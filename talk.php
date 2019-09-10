<?php

    session_start();

    $digit1 = mt_rand(1,20);
    $digit2 = mt_rand(1,20);
    if( mt_rand(0,1) === 1 ) {
            $math = "$digit1 + $digit2";
            $_SESSION['answer'] = $digit1 + $digit2;
    } else {
            $math = "$digit1 - $digit2";
            $_SESSION['answer'] = $digit1 - $digit2;
    }

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
    <form method="POST" action="submit.php" name="contact">

  <table>
  <tr><td>Name (optional) </td><td><input type="text" name="name" maxlength="80"></td></tr>
  <tr><td>Email (optional) </td><td><input type="text" name="email" maxlength="80"></td></tr>
  <tr><td>What's <?php echo $math; ?>? </td><td><input name="answer" type="text" /><br></td></tr>

  <tr><td colspan="2"><center><br>Comments:<br><textarea  name="message" maxlength="1000" cols="30" rows="6"></textarea></center><br><br></td></tr>
  </table>
  
            
    <input type="submit" value="Submit" />
    </form>
</div>
</center>
<br><br>
<a href="menu.html">Back</a>
</div>
</div></div>


<div class="footer" id="footer">copyright 2019 Claire Marie Guimond unless otherwise noted.</div>
</body>
</html>
