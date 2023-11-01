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

$data = $koneksi->query("SELECT * FROM karyawan WHERE nik = '$id'")->fetch_array();
// var_dump($data);
?>

<body>
    <h2 style="margin-top: 10px; margin-bottom: 20px; margin-left: 510px; text-align: center:">Edit Data Karyawan</h2>

    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
            <div class="card">
                <div class="card-body bg-dark">
                    <div class="form-group row">
                        <h5 style="margin-top: 10px; margin-bottom: 20px; text-align: center; color: white;">Editlah Data Di Bawah Sesuai Dengan Yang Anda Inginkan</h5>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">NIK</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <input name="nik" class="form-control" type="text" placeholder="Masukkan NIK!" value="<?= $data['nik']?>" readonly>
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
                                    <select class="form-control select" name="status_karyawan" id="">
                                        <option value="TETAP" <?=$data['status_karyawan'] == 'TETAP' ? "selected" :"" ?>>TETAP</option>
                                        <option value="KONTRAK" <?=$data['status_karyawan'] == 'KONTRAK' ? "selected" :"" ?>>KONTRAK</option>
                                        <option value="MAGANG" <?=$data['status_karyawan'] == 'MAGANG' ? "selected" : ""?>>MAGANG</option>
                                    </select>
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-2" style="color: white;">Bagian</label>
                            <label class="col-1" style="color: white;">:</label>
                                <div class="col-8">
                                    <select class="form-control select" name="bagian_id">
                                        <option value="">-- Pilih Bagian --</option>
                                        <?php
                                            $bagian = $koneksi->query("SELECT * FROM bagian");

                                            foreach($bagian as $row){
                                        ?>
                                        <option value="<?= $row['id']?>" 
                                        <?php if ($row['id'] == $data['bagian_id']) {
                                            echo "selected";                                            
                                        } ?>
                                        ><?= $row['nama'] ?></option>
                                        <?php }?>
                                    </select>
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