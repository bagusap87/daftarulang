<html>
<head></head>
<body>
</body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<body>
<form method="POST" action="--WEBBOT-SELF--">
	<!--webbot bot="SaveResults" U-File="fpweb:///_private/form_results.csv" S-Format="TEXT/CSV" S-Label-Fields="TRUE" -->
	<div style="background-color: #00CC99">
		<p align="center"><font size="5">
<?php
$host = "localhost";
$user = "root";
$pass = "bagusap";
$db = "sia_sekolahdb";

mysql_connect($host,$user,$pass);
mysql_select_db($db);
$tgl = $_POST ['tgl'];
$no_pendaftaran = $_POST ['no_pendaftaran'];
$nama = $_POST ['nama'];
$prog_pilihan = $_POST['prog_pilihan'];
$besar_uang = $_POST['besar_uang'];
$status_pendaftaran = $_POST['status_daftarulang'];
$keterangan = $_POST['keterangan'];

$query = "insert into daftarulang values ('$tgl','$no_pendaftaran','$nama','$prog_pilihan','$besar_uang','$status_daftarulang','$keterangan')";
$result = mysql_query($query);
if ($result)
{ echo (mysql_affected_rows()." Input Berhasil");}
mysql_close();
?>
</body>
<br>
		</font></div>
<p>
<div align="center">
<blink>
<a href="index.html"> <input type="button" value="Finish" name="B1"></a> </p></div>&nbsp
</form>
</html>

