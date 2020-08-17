<?php 
session_start(); 
if(!($_SESSION["user"]&&$_SESSION["pass"])) 
{ 
header("Location:../../index.php"); 
} else{
if($_SESSION["auth"] == 's' || $_SESSION["auth"] == 'b'){ 
$_SESSION['sms'] = $_SESSION["user"];
?>
<html> <head>         <meta charset="utf-8" />                 <title>Itsms</title>                 <!-- Our CSS stylesheet file -->         <link rel="stylesheet" href="../assets/css/styles.css" />                 <!-- Including the Lobster font from Google's Font Directory -->         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />                 <!-- Enabling HTML5 support for Internet Explorer -->         <!--[if lt IE 9]>           <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>         <![endif]-->     </head>         <body>          <nav>              <ul class="fancyNav">                 <li id="home"><a href="../../user/userhome.php" class="homeIcon">Home</a></li>                 <li id="news"><a href="../usersms.php">Send SMS</a></li>                 <li id="about"><a href="../usersearch.php">Search</a></li>                 <li id="services"><a href="../userupdate.php">Update</a></li>                 <li id="contact"><a href="../../user/userlogout.php">Logout</a></li>             </ul>         </nav>     </body> </html>

<header>tysms</header>


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