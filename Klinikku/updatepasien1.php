<?php
if(!empty($_POST['update'])){

$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$gol_darah=$_POST['gol_darah'];
$keluhan=$_POST['keluhan'];

$write=mysql_query("update pasien set nama='".$nama."' where Id_Num='".$id."'");
$write=mysql_query("update pasien set gender='".$gender."' where Id_Num='".$id."'");
$write=mysql_query("update pasien set alamat='".$alamat."' where Id_Num='".$id."'");
$write=mysql_query("update pasien set gol_darah='".$gol_darah."' where Id_Num='".$id."'");
$write=mysql_query("update pasien set keluhan='".$keluhan."' where Id_Num='".$id."'");

header("location:datapasien1.php");
}

?>