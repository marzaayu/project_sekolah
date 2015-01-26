<html>
<head>
<title>front office</title>
</head>
<link rel="stylesheet" type="text/css" href="project.css">
<body>
<div id="wrapper2">
<?php
include("menu1.php");

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
<form method="POST">
<input class="input" name="cari" type="text" placeholder="Cari Pasien" required style="margin-top:30; margin-left:30;"/></br>
<img src="search.png" width="20" style="margin-top:-30;margin-bottom:15;margin-left:35;position:absolute">
<input class="cari" type="submit" name="pencari" value="Cari">
</form>
<div id="poto"></div>
<div id="cari1" style="opacity:0;"></div>
<?php
include("cari.php");
?>
</br></br></br></br></br></br></br></br></br></br></br></br><font face="Tw Cen MT" color="white">
<center>&copy; Marza Ayu Annisa | XI RPL B | 2014 </font>
</div>
</body>
</html>