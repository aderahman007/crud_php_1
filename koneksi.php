<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'tugas');

if(!$koneksi){
    die ('gagal koneksi ke database' . mysqli_error($koneksi));
}
?>