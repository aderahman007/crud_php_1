<?php
include 'koneksi.php';
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];
$jurusan = $_POST['jurusan'];

$tambah_mahasiswa = mysqli_query($koneksi, "insert into mahasiswa values('', '$npm', '$nama', '$alamat', '$telpon', '$jurusan')");

if(!$tambah_mahasiswa){
    echo("Error Description: " . mysqli_error($koneksi));
}
?>