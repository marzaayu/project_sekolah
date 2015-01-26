<?php

mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("formlogin");

$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$gol_darah=$_POST['gol_darah'];
$keluhan=$_POST['keluhan'];

$query=mysql_query("update pasien set nama='$nama','$gender','$alamat','$gol_darah','$keluhan'");

?>