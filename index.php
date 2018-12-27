<?php
include 'header.php';
include 'koneksi.php';
?>
<div class="fixed-top">
    <h1><center>Data Mahasiswa</center></h1>
</div>
    <div class="container">
            
        <div class="text-right">
            <a href="tambah.php" class="btn btn-info"><span class="fa fa-user-plus"> Tambah Data</span></a>   
        </div>
        <br>
        <div class="panel panel-info panel-table">
            <div class="panel-heading">Data Mahasiswa</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">NPM</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">No Telepon</th>
                                <th class="text-center">Jurusan</th>
                                <th class="text-center">Setting</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include 'koneksi.php';
                                $data = mysqli_query($koneksi, "select * from mahasiswa") or die (mysqli_error($koneksi));
                            while($d = mysqli_fetch_array($data)){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $d['npm'] ?></td>
                                    <td class="text-center"><?php echo $d['nama'] ?></td>
                                    <td class="text-center"><?php echo $d['alamat'] ?></td>
                                    <td class="text-center"><?php echo $d['telpon'] ?></td>
                                    <td class="text-center"><?php echo $d['jurusan'] ?></td>
                                    <td class="text-center">
                                        <a href="edit.php?id=<?php echo $d['id'];?>" class="btn btn-success"><span class="fa fa-pencil"> Edit</span></a>

                                        <button class="btn btn-danger btnHapus" data-id="<?php echo $d['id'];?>" data-nama="<?php echo $d['nama'];?>"><span class="fa fa-trash"> Hapus</span></button>
                                    </td>
                                </tr>

                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
<?php include 'footer.php'; ?>
<script>
        $('.btnHapus').click(function(){
            var id = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                title: "Konfirmasi Hapus",
                text: "Yakin Menghapus Mahasiswa "+nama+" ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Berhasil Menghapus",{
                        icon: "success",
                        buttons: false,
                        timer: 2000,
                    }).then(()=>{
                        window.location.href="hapus.php?id="+id
                    });
                } else {
                    swal("Berhasil Membatalkan",{
                        icon: "success",
                        buttons: false,
                        timer: 2000,
                    });
                }
            });
        })
</script>