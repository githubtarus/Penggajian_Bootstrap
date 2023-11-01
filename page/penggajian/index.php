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
    <h2 style="margin-top: 10px; margin-bottom: 20px; text-align: center;">Penggajian</h2>

    <!--card-->
    <section class="container">
        <div class="card" style="background-color: grey;">
          <div class="card-header">
            <a href="tambah.php" class="btn bg-primary bg-dark col-2" style="margin-left: 1px; color: white;">Tambah</a>
          </div>
          <div class="card-body">
          <table id="example" border="3px" class="table table-striped" style="width:100%">
            <thead class="table-dark">
            <tr>
              <th scope="col" style="text-align: center;">ID</th>
              <th scope="col" style="text-align: center;">NIK Karyawan</th>
              <th scope="col" style="text-align: center;">Tahun</th>
              <th scope="col" style="text-align: center;">Bulan</th>
              <th scope="col" style="text-align: center;">Gaji Bayar</th>
              <th scope="col" style="text-align: center;">Opsi</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
                $no = 1;
                $penggajian = $koneksi->query("SELECT * FROM penggajian ORDER BY id_penggajian DESC");

                while ($data = $penggajian->fetch_array()){
            ?>
            <tr>
                <td style="text-align: center;"><?= $data['id_penggajian'] ?></td>
                <td style="text-align: center;"><?= $data['karyawan_nik'] ?></td>
                <td style="text-align: center;"><?= $data['tahun'] ?></td>
                <td style="text-align: center;"><?= $data['bulan'] ?></td>
                <td style="text-align: center;"><?= $data['gaji_bayar'] ?></td>
                <td style="text-align: center;">
              <a href="edit.php?id=<?= $data['id_penggajian']?>" class="btn bg-success" style="color: white;">Edit</a>
              <a href="proses.php?id=<?= $data['id_penggajian']?>" class="btn bg-danger" style="color: white;">Hapus</a>
              </td>
            </tr>
            <?php }?>
            </tbody>
            </table>
          </div>
        </div>
    </section>
</body>

<!--footer-->
<?php
include '../../templates/footer.php';
?>
    <!--end footer-->

    <!--End card-->
    <?php
include '../../templates/script.php';
?>


</html>

<script>
  new DataTable('#example');
</script>