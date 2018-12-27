<?php
include 'header.php';
?>

<div class="container">
    <h1><center>Menu Edit Data Mahasiswa</center></h1>
    <div class="panel panel-info">
      <div class="panel-heading">Tambah Data Mahasiswa</div>
        <div class="panel-body">
            <form method="post" role="form">
                <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $edit_mahasiswa = mysqli_query($koneksi, "select * from mahasiswa where id='$id'") or die (mysqli_error($koneksi));
                while($data = mysqli_fetch_array($edit_mahasiswa)){
                ?>
                <div class="form-group">
                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>"/>
                    <label for="NPM">NPM</label>
                    <input type="text" class="form-control" name="npm" placeholder="Inputkan NPM Anda" id="npm" value="<?php echo $data['npm']; ?>">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Inputkan Nama Lengkap Anda" id="nama" value="<?php echo $data['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat Lengkap</label>
                    <textarea class="form-control" name="alamat" rows="3" id="alamat"><?php echo $data['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="No Telepon">No Telepon</label>
                    <input type="text" class="form-control" name="telpon" placeholder="Inputkan Nomor Telepon Anda" id="telpon" value="<?php echo $data['telpon']; ?>">
                </div>
                <div class="form-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" placeholder="Inputkan Jurusan Anda" id="jurusan" value="<?php echo $data['jurusan']; ?>">
                </div>
                <button type="submit" class="btn btn-primary third" id="submit">Submit</button>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>

<script>
    $("#submit").click(function(){
        var id = $("#id").val();
        var npm = $("#npm").val();
        var nama = $("#nama").val();
        var alamat = $("#alamat").val();
        var telpon = $("#telpon").val();
        var jurusan = $("#jurusan").val();

        $.post("edit-aksi.php", {id:id, npm:npm, nama:nama, alamat:alamat, telpon:telpon, jurusan:jurusan},function(info){
        setTimeOut();   
        });
    });

    function setTimeOut(){
        swal("Data Berhasil Di Update", "   ", "success",{
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