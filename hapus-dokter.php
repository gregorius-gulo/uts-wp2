<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from dokter where id_dokter='$id'"); // UBAH //

if($hapus==true){

    header("location:tampil-dokter.php?pesan=hapusBerhasil"); // UBAH //

} else{
    echo "Error";
}


?>