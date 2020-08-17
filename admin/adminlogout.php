<?php
session_start();
unset($_SESSION["adminuser"]);
unset($_SESSION["adminpass"]);
header("Location:../index.php");
?>