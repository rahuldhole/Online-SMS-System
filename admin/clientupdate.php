<?php
include('../db.php');
$query = mysql_query("select * from Myport", $con);
$row = mysql_fetch_array($query);
$backurlport = $row['PORT'];
$backurl = "http://localhost:".$backurlport."/ClientUpdateSuccessfull.aspx";
if($_GET['AID']&&$_GET['APW']&&$_GET['UID']&&$_GET['UPW']&&$_GET['PORT']){


$sql = "INSERT INTO `a7784214_ddns`.`sample` (`name`) VALUES ('".$_POST['name']."')";
$query = mysql_query($sql, $con) or die ('Query is invalid: ' . mysql_error());
echo "Added Mr. ".$_POST['name'];

}
else
{
$backurl = "http://localhost:".$backurlport."/ClientUpdateFailled.aspx";
//echo "".backurl;
header('Location: ' .$backurl);
}
 /*
 "INSERT INTO `a7784214_ddns`.`sample` (`name`) VALUES (\'Vaibhav\');"; 
 $query = mysql_query("select * from sample", $conn);
 $row = mysql_fetch_array($query);
 echo "".$row['name'];
 
 while ($row = mysql_fetch_array($query)) {
	echo " ".$row['name'];
echo "<br></br>";
}
 */
 
?>