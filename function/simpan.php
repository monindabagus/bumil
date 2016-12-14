<?php
include "koneksi.php";

switch($_GET[act]){

  //Registrasi
  case "registrasi_pasien":
  $KODE = $_POST['NIK'];
  $NAMA = $_POST['NAMA'];
  $NAMA_KK = $_POST['NAMA_KK'];
  $NAMA_SUAMI = $_POST['NAMA_SUAMI'];
  $ALAMAT = $_POST['ALAMAT'];

  $query = "INSERT INTO pasien(NIK,NAMA,NAMA_KK,NAMA_SUAMI,ALAMAT)
						VALUES('$KODE','$NAMA','$NAMA_KK','$NAMA_SUAMI','$ALAMAT')";
	$result = mysql_query($query) or die(writeErrors(mysql_error()));

  if ($result) {
    echo "registrasi berhasil";
  }
  else {
    echo "registrasi gagal";
  }

  break;
}
?>
