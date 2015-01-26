<html>
<head>
<title>Mengedit  Data</title>
</head>

<body>
<?php
$koneksi  =  mysql_connect("localhost",  "root",  "")  or  die("Gagal  konek  ke  server.");
mysql_select_db("formlogin")  or  die("Gagal  membuka  database.");
$Id_Num  =  $_GET['Id_Num'];
$query  =  "select  *  from  pasien  where  Id_Num='$Id_Num'";
$hasil  =  mysql_query($query,  $koneksi)  or  die("Gagal  melakukan  query.");
$buff  =  mysql_fetch_array($hasil);
mysql_close($koneksi);
?>
<form  name="form1"  method="post"  action="edit2.php">
<input  type="hidden"  name="Id_Num"  value="<?php  echo  $buff['Id_Num'];  ?>"  />
<table  border="1">
<tr>
<td>Nama</td>

<td>:</td>
<td><?php  echo  $buff['nama'];  ?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td><input  name="gender"  type="text"  value="<?php  echo  $buff['gender'];  ?>"  /></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><input  name="alamat"  type="text"  value="<?php  echo  $buff['alamat'];  ?>"  /></td>
<td>Golongan Darah</td>
<td>:</td>
<td><input  name="gol_darah"  type="text"  value="<?php  echo  $buff['gol_darah'];  ?>"  /></td>
<td>Keluhan</td>
<td>:</td>
<td><input  name="keluhan"  type="text"  value="<?php  echo  $buff['keluhan'];  ?>"  /></td>
</tr>
<tr>
<td  colspan="3"><input  type="submit"  name="submit"  value="Simpan"  /></td>
</tr>
</table>
</form>
<p>Batal  mengedit  data.  Kembali  ke  <a  href="index.php">index.php</a></p>
</body>
</html>
