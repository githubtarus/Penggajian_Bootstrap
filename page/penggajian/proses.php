<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $id_penggajian  = $_POST['id_penggajian'];
    $karyawan_nik   = $_POST['karyawan_nik'];
    $tahun          = $_POST['tahun'];
    $bulan          = $_POST['bulan'];
    $gaji_bayar     = $_POST['gaji_bayar'];

    $submit = $koneksi->query("INSERT INTO penggajian VALUES(
        '$id_penggajian',
        '$karyawan_nik',
        '$tahun',
        '$bulan',
        '$gaji_bayar'
    )");

    if ($submit) {
        echo "<script>alert('Data Berhasil Ditambahkan !!');location.href='../penggajian/index.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Ditambahkan !!');location.href='../penggajian/proses.php';</script>";
    }
}else if (isset($_POST['edit'])) {
    $id_penggajian      = $_POST['id_penggajian'];
    $karyawan_nik       = $_POST['karyawan_nik'];
    $tahun              = $_POST['tahun'];
    $bulan              = $_POST['bulan'];
    $gaji_bayar         = $_POST['gaji_bayar'];

    $submit = $koneksi->query("UPDATE penggajian SET
        id_penggajian   = '$id_penggajian',
        karyawan_nik    = '$karyawan_nik',
        tahun           = '$tahun',
        bulan           = '$bulan',
        gaji_bayar      = '$gaji_bayar'
        WHERE
        id_penggajian   = '$id_penggajian';
    ");

    if ($submit) {
        echo "<script>alert('Data Berhasil Diubah !!');location.href='../penggajian/index.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Diubah !!');location.href='../penggajian/edit.php';</script>";
    }
}else if (isset($_GET['id'])) {

    $delete = $koneksi->query("DELETE FROM penggajian WHERE id_penggajian = '$_GET[id]'");
} if ($delete) {
    echo "<script>alert('Data Berhasil Dihapus !!');location.href='../penggajian/index.php';</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus !!');location.href='../penggajian/index.php';</script>";
}