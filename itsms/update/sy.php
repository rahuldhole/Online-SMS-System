<?php 
session_start(); 
if(!($_SESSION["user"]&&$_SESSION["pass"])) 
{ 
header("Location:../../index.php"); 
} else{
if($_SESSION["auth"] == 'u' || $_SESSION["auth"] == 'b'){ 
$_SESSION['update'] = $_SESSION["user"];
?>
<html> <head>         <meta charset="utf-8" />                 <title>Itsms</title>                 <!-- Our CSS stylesheet file -->         <link rel="stylesheet" href="../assets/css/styles.css" />                 <!-- Including the Lobster font from Google's Font Directory -->         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />                 <!-- Enabling HTML5 support for Internet Explorer -->         <!--[if lt IE 9]>           <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>         <![endif]-->     </head>         <body>          <nav>              <ul class="fancyNav">                 <li id="home"><a href="../../user/userhome.php" class="homeIcon">Home</a></li>                 <li id="news"><a href="../usersms.php">Send SMS</a></li>                 <li id="about"><a href="../usersearch.php">Search</a></li>                 <li id="services"><a href="../userupdate.php">Update</a></li>                 <li id="contact"><a href="../../user/userlogout.php">Logout</a></li>             </ul>         </nav>     </body> </html>



<div align = "center">
<header class = "heding" align = "center" style = "font-size: 25px;margin-top:15px;margin-below:0px;">ADD SY Student</header><br />
<form action = "" method = "post">
<input type = "text" name = "rn" placeholder = "roll no">
<br />
<input type = "submit" style = "margin-top:10px" value = "ADD Student" style = "color: red; border-radius: 4px; text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);background: rgb(66, 184, 221);font-size: 150%;">
</form>
</div>












<?php 
}else{
?>
<html> <head>         <meta charset="utf-8" />                 <title>Itsms</title>                 <!-- Our CSS stylesheet file -->         <link rel="stylesheet" href="../assets/css/styles.css" />                 <!-- Including the Lobster font from Google's Font Directory -->         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />                 <!-- Enabling HTML5 support for Internet Explorer -->         <!--[if lt IE 9]>           <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>         <![endif]-->     </head>         <body>          <nav>              <ul class="fancyNav">                 <li id="home"><a href="../../user/userhome.php" class="homeIcon">Home</a></li>                 <li id="news"><a href="../usersms.php">Send SMS</a></li>                 <li id="about"><a href="../usersearch.php">Search</a></li>                 <li id="services"><a href="../userupdate.php">Update</a></li>                 <li id="contact"><a href="../../user/userlogout.php">Logout</a></li>             </ul>         </nav>     </body> </html>
<header class = "heding" align = "center" style = "font-size: 30px;margin-top:15px;margin-below:0px;">
You are not authenteicated to Update...<br />
Please Contact to HOD if you want this feature
</header>

<?php
}
} ?>