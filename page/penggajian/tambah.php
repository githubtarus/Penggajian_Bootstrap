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

<body>
    <h2 style="margin-top: 10px; margin-bottom: 20px; margin-left: 510px; text-align: center:">Tambah Data Penggajian</h2>

    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
            <div class="card">
                <div class="card-body bg-dark">
                    <div class="form-group row">
                        <h5 style="margin-top: 10px; margin-bottom: 20px; text-align: center; color: white;">Isilah Data Di Bawah</h5>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">ID</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <input name="id_penggajian" class="form-control" type="number" placeholder="Masukkan ID!">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">NIK Karyawan</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <input name="karyawan_nik" class="form-control" type="text" placeholder="Masukkan NIK Karyawan!">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">Tahun</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <input name="tahun" class="form-control" type="text" placeholder="Masukan Tahun!">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">Bulan</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <input name="bulan" class="form-control" type="text" placeholder="Masukan Bulan!">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">Gaji Bayar</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <input name="gaji_bayar" class="form-control" type="text" placeholder="Masukan Gaji Bayar!">
                                </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn bg-success col-2" style="color: white;" name="simpan">Simpan</button>
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