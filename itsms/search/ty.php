<?php session_start(); if(!($_SESSION["user"]&&$_SESSION["pass"])) { header("Location:../../index.php"); } else{ ?> <html> <head>         <meta charset="utf-8" />                 <title>Itsms</title>                 <!-- Our CSS stylesheet file -->         <link rel="stylesheet" href="../assets/css/styles.css" />                 <!-- Including the Lobster font from Google's Font Directory -->         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />                 <!-- Enabling HTML5 support for Internet Explorer -->         <!--[if lt IE 9]>           <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>         <![endif]-->     </head>         <body>          <nav>              <ul class="fancyNav">                 <li id="home"><a href="../../user/userhome.php" class="homeIcon">Home</a></li>                 <li id="news"><a href="../usersms.php">Send SMS</a></li>                 <li id="about"><a href="../usersearch.php">Search</a></li>                 <li id="services"><a href="../userupdate.php">Update</a></li>                 <li id="contact"><a href="../../user/userlogout.php">Logout</a></li>             </ul>         </nav>     </body> </html>


<header>ty</header>




<?php } ?>