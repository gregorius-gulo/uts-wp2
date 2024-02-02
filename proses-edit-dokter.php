<?php

include "koneksi.php";

$id=$_POST['id_dokter'];                 // UBAH //
$nama_dokter=$_POST['nama_dokter'];  
$spesialisasi=$_POST['spesialisasi'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$tanggal_lahir=$_POST['tanggal_lahir'];

$ubah=$koneksi->query("update dokter set nama_dokter='$nama_dokter', spesialisasi='$spesialisasi', alamat='$alamat', telepon='$telepon', email='$email', tanggal_lahir='$tanggal_lahir' where id_dokter='$id'"); // UBAH //

if($ubah==true){

    header("location:tampil-dokter.php?pesan=editBerhasil"); // UBAH //
} else{
    echo "Error";
}

?>