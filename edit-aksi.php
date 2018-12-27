<?php
include 'koneksi.php';
$id = $_POST['id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];
$jurusan = $_POST['jurusan'];

$edit_mahasiswa = mysqli_query($koneksi, "update mahasiswa set npm='$npm', nama='$nama', alamat='$alamat', telpon='$telpon', jurusan='$jurusan' where id='$id'");

if(!$edit_mahasiswa){
    echo("Error Description: " . mysqli_error($koneksi));
}
?>