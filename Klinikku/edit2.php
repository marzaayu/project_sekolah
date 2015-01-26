<html>
<head>
<title>Mengedit  Data</title>
</head>

<body>
<?php
$koneksi  =  mysql_connect("localhost",  "root",  "")  or  die("Gagal  konek  ke  server.");
mysql_select_db("mid")  or  die("Gagal  membuka  database.");
$nis  =  $_POST['nis'];
$nama  =  $_POST['nama'];
$nilai  =  $_POST['nilai'];
$query  =  mysql_query("update  nilai  set  nama='$nama',  nilai='$nilai'  where  nis='$nis'");
mysql_close($koneksi);
?>
<p>Data  sudah  ter-update.  Silakan  dicek  di  <a  href="index.php">index.php</a></p>
</body>
</html>
