<?php
//$sql = "INSERT INTO `itsms`.`adminlogin` (`username`, `password`) VALUES (\'kismat\', \'7\');";
session_start();
$message="";
if(count($_POST)>0)
	{
		if($_POST['uname']&&$_POST['pass'])
		{
			$conn = mysqli_connect("localhost", "kismat","7");
			mysqli_select_db($conn, "itsms");
			$sql = "SELECT * FROM userlogin WHERE username='" . $_POST["uname"] . "' and password = '". $_POST["pass"]."'";
			$res = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($res);
			if(is_array($row)){
			$_SESSION["user"] = $row['username'];
			$_SESSION["pass"] = $row['password'];
			$_SESSION["auth"] = $row['auth'];
			} else {
					$message = "Invalid Username or Password!";
			}
		}
	}
if(isset($_SESSION["user"])) {
header("Location:userhome.php");
}
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Itsms|User Login Form</title>
  <link rel="stylesheet" href="../itsms/css/style.css">
</head>
<body>
  <form action="" class="login" method = "POST">
    <h1>IT SMS User Log in</h1>
	<div class="message" style = "color:red"><?php if($message!="") { echo $message; } ?></div>
    <input type="text" name="uname" class="login-input" placeholder="username" autofocus>
    <input type="password" name="pass" class="login-input" placeholder="Password">
    <input type="submit" value="Login" class="login-submit">
   <!-- <p class="login-help"><a href="index.html">Forgot password?</a></p>-->
  </form>
</body>
</html>