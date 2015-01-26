<html>
<head>
<title>Kliniku</title>
</head>
<link rel="stylesheet" type="text/css" href="project.css">
<body>
<div id="wrapper">
<div id="kotak">
<div id="login">
<form method="POST">
<img src="icon1.png" width="20" style="padding-top:10;padding-bottom:10;padding-left:10;position:absolute;margin-top:130;">
<input class="input" name="username" type="text" placeholder="Username" required style="margin-top:130;"/></br>
<img src="lock.png" width="20" style="padding-top:10;padding-bottom:15;padding-left:10;position:absolute">
<input class="input" name="password" type="password" placeholder="Password" required/></br>
<input class="submit" type="submit" name="Login" value="Login"/></br>
</form>
<?php

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("formlogin");
session_start();
session_destroy();

if(!empty($_POST['Login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$all=mysql_query("select * from login where Username='".$username."' and Password='".$password."'");
$log=mysql_fetch_array($all);

if($log){

	$rows=mysql_num_rows($all);
	
	if($rows > 0){
	
	session_start();
	$_SESSION['username']=$username;
	$type=$log['Type'];
	$_SESSION['type']=$log['Type'];
	$_SESSION['status']="loggedin";
	if($type=="dokter"){
	$_SESSION['type']=$log['type'];
	header("location:home.php");
}
else if($type=="office"){
$_SESSION['type']=$log['type'];
header("location:home-office.php");
}
else if($type=="admin"){
$_SESSION['type']=$log['type'];
header("location:home-admin.php");
}
}
}
}
?>
</br></br></br></br></br></br></br></br></br></br></br></br><font face="Tw Cen MT" color="white">
&copy; Marza Ayu Annisa | XI RPL B | 2014
</font>
</div>
</div>
</div>
</body>
</html>