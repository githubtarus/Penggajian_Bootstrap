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
    <h2 style="margin-top: 10px; margin-bottom: 20px; margin-left: 510px; text-align: center:">Tambah Data Karyawan</h2>

    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
            <div class="card">
                <div class="card-body bg-dark">
                    <div class="form-group row">
                        <h5 style="margin-top: 10px; margin-bottom: 20px; text-align: center; color: white;">Isilah Data Di Bawah</h5>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">NIK</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <input name="nik" class="form-control" type="text" placeholder="Masukkan NIK!">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">Nama</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <input name="nama" class="form-control" type="text" placeholder="Masukkan Nama!">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">Tanggal Mulai</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <input name="tanggal_mulai" class="form-control" type="date" placeholder="Masukan Tanggal Mulai!">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">Gaji Pokok</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <input name="gaji_pokok" class="form-control" type="number" placeholder="Masukan Gaji Pokok!">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">Status Karyawan</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <select class="form-control" name="status_karyawan" id="">
                                        <option value="">-- Pilih Status Karyawan --</option>
                                        <option value="TETAP">TETAP</option>
                                        <option value="KONTRAK">KONTRAK</option>
                                        <option value="MAGANG">MAGANG</option>
                                    </select>
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">Bagian</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <select class="form-control" name="bagian_id">
                                        <option value="">-- Pilih Bagian --</option>
                                        <?php
                                            $bagian = $koneksi->query("SELECT * FROM bagian");

                                            foreach($bagian as $row){
                                        ?>
                                        <option value="<?= $row['id']?>"><?= $row['nama'] ?></option>
                                        <?php }?>
                                    </select>
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