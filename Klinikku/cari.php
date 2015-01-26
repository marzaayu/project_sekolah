<?php
if(!empty($_POST['pencari'])){

$pasien=$_POST['cari'];

$cari=mysql_query("select * from pasien where nama='".$pasien."'");
if($cari==true){
$row=mysql_num_rows($cari);
if($row > 0){
while($tampil=mysql_fetch_array($cari)){
echo "<br><br><br><br><br><br><br><br><br><br><div id='cari1'>"; 
echo "&nbsp;&nbsp;&nbsp;<font face='Biko'>Nama  :  ".$tampil['nama']."<br>";
echo "&nbsp;&nbsp;&nbsp;Jenis Kelamin   :   ".$tampil['gender']."</br>";
echo " &nbsp;&nbsp;&nbsp;Alamat   :   ".$tampil['alamat']."</br>";
echo " &nbsp;&nbsp;&nbsp;Golongan Darah   :   ".$tampil['gol_darah']."</br>";
echo "&nbsp;&nbsp;&nbsp; Keluhan   :   ".$tampil['keluhan']."</font></br>";
echo "</div>";
}
}
else{
echo "Tidak ada pasien";
}
}

}
?>


