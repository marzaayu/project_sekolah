<?php

if(!empty($_POST['Daftar'])){

$Nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$gol_darah=$_POST['gol_darah'];
$keluhan=$_POST['keluhan'];

mysql_query("insert into pasien (Nama,gender,alamat,gol_darah,keluhan)
values('".$Nama."','".$gender."','".$alamat."','".$gol_darah."','".$keluhan."')
");

}
?>