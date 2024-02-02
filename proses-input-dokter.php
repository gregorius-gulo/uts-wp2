<?php

$nama_dokter=$_POST['nama_dokter'];             // UBAH //
$spesialisasi=$_POST['spesialisasi'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$tanggal_lahir=$_POST['tanggal_lahir'];

include "koneksi.php";

$simpan=$koneksi->query("insert into dokter(nama_dokter,spesialisasi,alamat,telepon,email,tanggal_lahir) 
                        values ('$nama_dokter', '$spesialisasi', '$alamat', '$telepon', '$email', '$tanggal_lahir')"); // UBAH //

if($simpan==true){

    header("location:tampil-dokter.php?pesan=inputBerhasil"); // UBAH //
} else{
    echo "Error";
}




?>