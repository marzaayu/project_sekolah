<html>
<head>
<title>Pendaftaran Pasien</title>
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

if(isset($_GET['edit'])){
   $edit=$_GET['edit'];
   $id=$edit;
   }
?>
<div id="kotak1">
<form method="POST">
		
			&nbsp;&nbsp;Nama&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="daftar" type="text" maxlength="30" name="nama" placeholder="Nama Lengkap" required/>
			<br>
			
			&nbsp;&nbsp;Jenis Kelamin&nbsp;: <input class="radio1" style="margin-left:45;" type="radio" name="gender" value="Pria" required/>Pria
			<input class="radio1" type="radio" name="gender" value="Wanita" required/>Wanita
			<br>
			
			&nbsp;&nbsp;Alamat&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="daftar" type="text" maxlength="30" name="alamat" placeholder="Alamat" required/>
			<br>
		
			&nbsp;&nbsp;Golongan Darah&nbsp;:<input class="radio1" style="margin-left:35;" type="radio" name="gol_darah" value="O" required/>O
			<input class="radio1" type="radio" name="gol_darah" value="A" required/>A
			<input class="radio1" type="radio" name="gol_darah" value="B" required/>B
			<input class="radio1" type="radio" name="gol_darah" value="AB" required/>AB
			<br>
			&nbsp;&nbsp;Keluhan&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea class="area" style="max-height:151px;height:151px;" maxlength="500" name="keluhan" placeholder="Keluhan" required></textarea>
			<br>
</br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input class="submit" type="submit" name="update" id="simpan" >
			<input class="submit" type="reset" value="Reset"/>
		
		</form>
		<?php
		include("updatepasien1.php");
		?>
</div>
</br></br></br></br></br><font face="Tw Cen MT" color="white">
<center>&copy; Marza Ayu Annisa | XI RPL B | 2014 </font>
</div>
</body>
</html>