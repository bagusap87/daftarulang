<html>
<body>
</table>
<table>
<tr>
<td><a href="index.html">
<img src="img/home2.jpg" weight="100" height="45" width="46" title=Home></a></td>

</tr>
</table>
<table border="1" width="50%" cellspacing="0" align="center" >
 <div align="center"><font face="Arno Pro"><b>REKAP PENDAFTARAN PESERTA DIDIK BARU<br>
	SMK SATYA PRAJA 2 PETARUKAN</b></font><font color="blue"> </font></div><P>
	
<?php
$host = "localhost";
$user = "root";
$pass = "bagusap";
$db   = "sia_sekolahdb";  // memilih database

$kon = mysql_connect ($host,$user,$pass);
mysql_select_db($db);
$q = mysql_query("select * from daftarulang",$kon);
$jum = mysql_num_rows($q);
$c = 0;
  echo "<tr bgcolor=#00CED1>
  		<th>No</th>
  		<th>Tanggal</th>
		<th>No. Pendaftaran</th>
		<th>Nama Peserta Didik</th>
		<th>Program Keahlian</th>
		<th>Besar Uang Pendaftaran</th>
		<th>Status Daftar Ulang</th>
		<th>Keterangan</th>
		</tr>";
while($row=mysql_fetch_array($q))
{
  $c = $c +1;
    echo "<tr>
         <td align=center>$c</td>
         <td>$row[tgl]</td>
         <td>$row[no_pendaftaran]</td>
         <td>$row[nama]</td>
         <td>$row[prog_pilihan]</td>
		 <td>$row[besar_uang]</td>
		 <td>$row[status_daftarulang]</td>
         <td>$row[keterangan]</td>
         </tr>";
}
?>
<?
echo "Total Peserta Daftar Ulang : $jum";
?>
<br>
</body>
</html>
<table>
<br>
<tr>
<a href="lihatdata.php"> 
    
    </a>
</tr>
</table>