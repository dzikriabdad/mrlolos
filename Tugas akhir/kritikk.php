<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2 align="center">Pesan sudah terkirim</h2>
	<?php
  //untuk menyimpan user name dan password  ke file txt
@$username=$_POST['nama'];
@$pesan=$_POST['pesan'];
@$email=$_POST['email'];
@$subjek=$_POST['subjek'];
$myfile="informasi.txt";
$fh=fopen($myfile, 'w')or die("file tidak ditemukan");
$stringdata="nama :    "  .$username  .   "  email :   "    .   $email  . "  pesan :   "  .  $pesan   ."  subjek : "  .$subjek ."\n";
fwrite($fh, $stringdata);
fclose($fh);
?>

</body>
<a href="kokokokoko.html">kembali</a>
</html>