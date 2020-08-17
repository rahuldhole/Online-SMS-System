<?php 
session_start(); 
if(!($_SESSION["user"]&&$_SESSION["pass"])) 
{ 
header("Location:../index.php"); 
} else{
if($_SESSION["auth"] == 's' || $_SESSION["auth"] == 'b'){ 
$_SESSION['sms'] = $_SESSION["user"];
?>
<html> <head>         <meta charset="utf-8" />                 <title>Itsms</title>                 <!-- Our CSS stylesheet file -->         <link rel="stylesheet" href="assets/css/styles.css" />                 <!-- Including the Lobster font from Google's Font Directory -->         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />                 <!-- Enabling HTML5 support for Internet Explorer -->         <!--[if lt IE 9]>           <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>         <![endif]-->     </head>         <body>          <nav>              <ul class="fancyNav">                 <li id="home"><a href="../user/userhome.php" class="homeIcon">Home</a></li>                 <li id="news"><a href="usersms.php">Send SMS</a></li>                 <li id="about"><a href="usersearch.php">Search</a></li>                 <li id="services"><a href="userupdate.php">Update</a></li>                 <li id="contact"><a href="../user/userlogout.php">Logout</a></li>             </ul>         </nav>     </body> </html>


<div align = "center">
<header class = "heding" align = "center" style = "font-size: 50px;margin-top:15px;margin-below:0px;">Send SMS By Year</header><br />
<header style = "margin-top:0px">
&nbsp&nbsp&nbsp*<a href = "sms/sysms.php">To Second Year Students</a><br />
*<a href = "sms/tysms.php">To Third Year Students</a><br />
*<a href = "sms/fysms.php">To Final Year Students</a><br />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*<a href = "sms/allsms.php">To All Students in SY, TY, B.Tech.</a></header>
<header class = "heding" align = "center" style = "font-size: 50px;margin-top:15px;margin-below:0px;">Send SMS By Registration number</header><br />
<form action = "sms/regsms.php" method = "post">
<br />
<textarea rows="7" cols="70" name = "regnos" placeholder = "Message to send" style="background:#99FFFF" style="font-family:Comic Sans MS" style="color:#0033CC" style="border style:solid" onfocus="this.value=''; this.onfocus=null;">Type message to send.</textarea>
<br />
<textarea rows="7" cols="70" name = "msg"  placeholder = "Registration numbers" size = "150" style="background:#99FFFF" style="font-family:Comic Sans MS" style="color:#0033CC" style="border style:solid" onfocus="this.value=''; this.onfocus=null;">Type comma saperated registration numbers of students.</textarea>
<header style = "margin-top:0px">
<input type = "checkbox" name = "student" value = "student" style="background:#99FFFF" style="font-family:Comic Sans MS" style="color:#0033CC" style="border style:solid">Send to Student
<br />
<input type = "checkbox" name = "parents" value = "parents" style="background:#99FFFF" style="font-family:Comic Sans MS" style="color:#0033CC" style="border style:solid">Send to Parents
</header>
<input type = "submit" value = "Send SMS" style = "color: red; border-radius: 4px; text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);background: rgb(66, 184, 221);font-size: 150%;">
</form>
</div>


<?php 
}else{
?>
<html> <head>         <meta charset="utf-8" />                 <title>Itsms</title>                 <!-- Our CSS stylesheet file -->         <link rel="stylesheet" href="assets/css/styles.css" />                 <!-- Including the Lobster font from Google's Font Directory -->         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />                 <!-- Enabling HTML5 support for Internet Explorer -->         <!--[if lt IE 9]>           <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>         <![endif]-->     </head>         <body>          <nav>              <ul class="fancyNav">                 <li id="home"><a href="../user/userhome.php" class="homeIcon">Home</a></li>                 <li id="news"><a href="usersms.php">Send SMS</a></li>                 <li id="about"><a href="usersearch.php">Search</a></li>                 <li id="services"><a href="userupdate.php">Update</a></li>                 <li id="contact"><a href="../user/userlogout.php">Logout</a></li>             </ul>         </nav>     </body> </html>
<header class = "heding" align = "center" style = "font-size: 30px;margin-top:15px;margin-below:0px;">
You are not authenteicated to SMS...<br />
Please Contact to HOD if you want this feature
</header>

<?php
}
} ?>