<?php
 //Membuat Koneksi Mysql
 mysql_connect("localhost","root","bagusap") or die ("Koneksi Gagal");
 mysql_select_db("sia_sekolahdb") or die ("Database Tidak Terakses");
 
 //Membuat Query
 $result=mysql_query("SELECT * FROM daftarulang BY no_pendaftaran");
 
 require_once 'PHPExcel/Classes/PHPExcel.php';
 $objPHPExcel = new PHPExcel();
 
 // Setting Worsheet yang aktif 
 $objPHPExcel->setActiveSheetIndex(0);  
 
 //Menentukan baris awal 
 $rowCount = 1;  
  
 //Menentukan kolom awal  
 $column = 'A';
  
 //Mencetak header berdasarkan field tabel
 for ($i = 0; $i < mysql_num_fields($result); $i++)  {
  $objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, mysql_field_name($result,$i));
  $column++;
 } 
 
 //menentukan baris untuk input data
 $rowCount = 2;  
  
 //Proses cetak data ke excel
 while($row = mysql_fetch_row($result)) {  
    $column = 'A';
 
   for($j=0; $j<mysql_num_fields($result);$j++)  
    {  
        if(!isset($row[$j]))  
 
            $value = NULL;  
 
        elseif ($row[$j] != "")  
 
            $value = strip_tags($row[$j]);  
 
        else 
 
            $value = "";  
 
   
  if($column=='F'){
   //mencetak jika kolom tersebut berbentuk string.
   $objPHPExcel->getActiveSheet()->setCellValueExplicit($column.$rowCount, $value,  PHPExcel_Cell_DataType::TYPE_STRING);
  }else{
   //mencetak secara default
   $objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, $value);
  }
        $column++; 
    }  
    $rowCount++;
} 
 
// Mencetak File Excel 
header('Content-Type: application/vnd.ms-excel'); 
header('Content-Disposition: attachment;filename="laporan-ppdb_sapra2.xls"'); 
header('Cache-Control: max-age=0'); 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 
$objWriter->save('php://output');
?>