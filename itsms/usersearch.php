<?php session_start(); if(!($_SESSION["user"]&&$_SESSION["pass"])) { header("Location:../index.php"); } else{ ?> <html> <head>         <meta charset="utf-8" />                 <title>Itsms</title>                 <!-- Our CSS stylesheet file -->         <link rel="stylesheet" href="assets/css/styles.css" />                 <!-- Including the Lobster font from Google's Font Directory -->         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />                 <!-- Enabling HTML5 support for Internet Explorer -->         <!--[if lt IE 9]>           <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>         <![endif]-->     </head>         <body>          <nav>              <ul class="fancyNav">                 <li id="home"><a href="../user/userhome.php" class="homeIcon">Home</a></li>                 <li id="news"><a href="usersms.php">Send SMS</a></li>                 <li id="about"><a href="usersearch.php">Search</a></li>                 <li id="services"><a href="userupdate.php">Update</a></li>                 <li id="contact"><a href="../user/userlogout.php">Logout</a></li>             </ul>         </nav>     </body> </html>



<header class = "heding" align = "center" style = "font-size: 50px;margin-top:15px;margin-below:0px;">
See Students Record
</header><br />
<div align = "center" style = "font-size: 20px">
&nbsp&nbsp&nbsp*<a href = "search/sy.php">Second Year Students</a><br />
*<a href = "search/ty.php">Third Year Students</a><br />
*<a href = "search/fy.php">Final Year Students</a><br />
</div>
<br />

<div align = "center">
<header class = "heding" align = "center" style = "font-size: 25px;margin-top:15px;margin-below:0px;">Search By Registration number</header><br />
<form action = "search/byregno.php" method = "post">
<input type = "text" name = "regno" placeholder = "Type Registration number">
<br />
<input type = "submit" style = "margin-top:10px" value = "Search info" style = "color: red; border-radius: 4px; text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);background: rgb(66, 184, 221);font-size: 150%;">
</form>
</div>
<div align = "center">
<header class = "heding" align = "center" style = "font-size: 25px;margin-top:15px;margin-below:0px;">Search By Student Name</header><br />
<form action = "search/byname.php" method = "post">
<input type = "text" name = "regno" placeholder = "Type Student Name">
<br />
<input type = "submit" style = "margin-top:10px" value = "Search info" style = "color: red; border-radius: 4px; text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);background: rgb(66, 184, 221);font-size: 150%;">
</form>
</div>


<?php } ?>