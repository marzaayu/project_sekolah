<html>
<head>
<title>Data Pasien</title>
<style>
.table{
margin:auto;
width:100%;
border:2px solid #D4FFFF;
}
.td{
margin:auto;
width:100%;
border:2px solid #D4FFFF;
}
.tr{
margin:auto;
width:100%;
border:2px solid #D4FFFF;
}
</style>
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
if(isset($_GET['del'])){
$del=$_GET['del'];
mysql_query("delete from pasien where Id_Num='$del'");
}
if(isset($_GET['edit'])){
$del=$_GET['edit'];
mysql_query("delete from pasien where Id_Num='$edit'");
}
?>

<div id="logoku"></div>
<div id="data">
<table class="table">
</br>
<tr>
<td class="td" bgcolor="#B3F0FD"><center>Nama</center></td>
<td class="td" bgcolor="#B3F0FD"><center>Jenis Kelamin</center></td>
<td class="td" bgcolor="#B3F0FD"><center>Alamat</center></td>
<td class="td" bgcolor="#B3F0FD"><center>Golongan Darah</center></td>
<td class="td" bgcolor="#B3F0FD"><center>Keluhan</center></td>
<td class="td" bgcolor="#B3F0FD"><center>Keterangan</center></td>
</tr>

<?php
$pasien=mysql_query("select * from pasien");
while($tampil=mysql_fetch_array($pasien)){
echo "<tr>";
echo "<td class='td'>".$tampil['Nama']."</td>";
echo "<td class='td'>".$tampil['gender']."</td>";
echo "<td class='td'>".$tampil['alamat']."</td>";
echo "<td class='td'>".$tampil['gol_darah']."</td>";
echo "<td class='td'>".$tampil['keluhan']."</td>";
echo "<td><a href ='datapasien1.php?del=".$tampil['Id_Num']."'>Hapus</a>";
echo "<a href ='updatepasien.php?edit=".$tampil['Id_Num']."'>&nbsp;&nbsp;Edit</a></td>";
echo "</tr>";
}

?>
</table>
</div>

</br></br><font face="Tw Cen MT" color="white">
<center>&copy; Marza Ayu Annisa | XI RPL B | 2014 </font>
</div>
</body>
</html>