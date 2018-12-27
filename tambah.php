<?php
include 'header.php';
?>

<div class="container">
    <h1><center>Menu Tambah Mahasiswa</center></h1>
    <div class="panel panel-info">
      <div class="panel-heading">Tambah Data Mahasiswa</div>
        <div class="panel-body">
            <form method="post" role="form">
                <div class="form-group">
                    <label for="NPM">NPM</label>
                    <input type="text" class="form-control" name="npm" id="npm" placeholder="Inputkan NPM Anda">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Inputkan Nama Lengkap Anda">
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat Lengkap</label>
                    <textarea class="form-control" name="alamat" rows="3" id="alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="No Telepon">No Telepon</label>
                    <input type="text" class="form-control" name="telpon" id="telpon" placeholder="Inputkan Nomor Telepon Anda">
                </div>
                <div class="form-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Inputkan Jurusan Anda">
                </div>
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php';?>

<script>
    $("#submit").click(function(){
        var npm = $("#npm").val();
        var nama = $("#nama").val();
        var alamat = $("#alamat").val();
        var telpon = $("#telpon").val();
        var jurusan = $("#jurusan").val();

        $.post("tambah-aksi.php", {npm:npm, nama:nama, alamat:alamat, telpon:telpon, jurusan:jurusan},function(info){
        setTimeOut();   
        });
    });

    function setTimeOut(){
        swal("Data Berhasil Di Tambah", "   ", "success",{
            buttons: false,
            timer: 2000,
        }).then(() => {
            window.location.href="index.php"
        })
        
    }
    $("form").submit(function(){
        return false;

    })
</script>