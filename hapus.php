<?php
include 'koneksi.php';
$id = $_GET['id'];
$hapus_mahasiswa = mysqli_query($koneksi, "delete from mahasiswa where id='$id'");

if(!$hapus_mahasiswa){
    echo("Error Description:" . mysqli_error($koneksi));
}else{
    header("location: index.php");
}