<html>
<head>
<title>Data Dokter</title>
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
<div id="logoku"></div>
<style>
.table{
margin-left:50;
margin-top:-500;

}


</style>
<table border="1">
<tr>
<td bgcolor="#B3F0FD"><center>Nama</center></td>
<td bgcolor="#B3F0FD"><center>Jenis Kelamin</center></td>
<td bgcolor="#B3F0FD"><center>Alamat</center></td>
<td bgcolor="#B3F0FD"><center>Golongan Darah</center></td>
<td bgcolor="#B3F0FD"><center>Keluhan</center></td>

</tr>
<?php

$pasien=mysql_query("select * from pasien");
while($tampil=mysql_fetch_array($pasien)){
echo "<tr>";
echo "<td>".$tampil['nama']."</td>";
echo "<td>".$tampil['gender']."</td>";
echo "<td>".$tampil['alamat']."</td>";
echo "<td>".$tampil['gol_darah']."</td>";
echo "<td>".$tampil['keluhan']."</td>";
echo "</tr>";
}

?>
</table>

</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br><font face="Tw Cen MT" color="white">
<center>&copy; Marza Ayu Annisa | XI RPL B | 2014 </font>
</div>
</body>
</html>