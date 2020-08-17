<?php
session_start();
if(!($_SESSION["adminuser"]&&$_SESSION["adminpass"])) {
header("Location:adminlogin.php");
} else{
?><html><head>
        <meta charset="utf-8" />
        
        <title>Itsms</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="../../itsms/assets/css/styles.css" />
        
        <!-- Including the Lobster font from Google's Font Directory -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
        
        <!-- Enabling HTML5 support for Internet Explorer -->
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
 
        <nav>
             <ul class="fancyNav">
                <li id="home"><a href="../adminhome.php" class="homeIcon">Home</a></li>
                <li id="news"><a href="user.php">Users</a></li>
                <li id="about"><a href="sms.php">SMS</a></li>
                <li id="contact"><a href="../adminlogout.php">Logout</a></li>
            </ul>
        </nav>
    </body>
</html>
		<header align = "center">SMS</header><br /><br />
<?php
}
?>