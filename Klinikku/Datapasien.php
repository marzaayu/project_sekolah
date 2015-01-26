<html>
<head>
<title>Data Pasien</title>
</head>
<link rel="stylesheet" type="text/css" href="project.css">
<body>
<div id="wrapper2">
<?php
include("menu.php");

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("formlogin");

session_start();

$status=$_SESSION['status'];
$type=$_SESSION['type'];
$username=$_SESSION['username'];

if($status !="loggedin"){
session_destroy();
header("location:index.php");
}
?>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br><font face="Tw Cen MT" color="white">
<center>&copy; Marza Ayu Annisa | XI RPL B | 2014 </font>
</div>
</body>
</html>