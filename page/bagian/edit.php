<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>

<!-- Navbar -->
<?php
include '../../templates/navbar.php';
?>
<!-- End Navbar -->

<?php
$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM bagian WHERE id_bagian = '$id'")->fetch_array();
// var_dump($data);
?>

<body>
    <h2 style="margin-top: 10px; margin-bottom: 20px; margin-left: 510px; text-align: center:">Edit Data Bagian</h2>

    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
            <div class="card">
                <div class="card-body bg-dark">
                    <div class="form-group row">
                        <h5 style="margin-top: 10px; margin-bottom: 20px; text-align: center; color: white;">Editlah Data Di Bawah Sesuai Dengan Yang Anda Inginkan</h5>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white; text-align: center;">ID</label>
                            <label class="col-1" style="color: white; text-align: center;">:</label>
                                <div class="col-8">
                                    <input name="id_bagian" class="form-control" type="number" placeholder="Masukkan ID Bagian!" value="<?= $data['id_bagian']?>" readonly>
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white; text-align: center;">Nama</label>
                            <label class="col-1" style="color: white; text-align: center;">:</label>
                                <div class="col-8">
                                    <input name="nama" class="form-control" type="text" placeholder="Masukkan Nama!">
                                </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn bg-success col-2" style="color: white;" name="edit">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </section>
</body>


    <!--End card-->
    <?php
include '../../templates/script.php';
?>


</html>

<script>
  new DataTable('#example');
</script>