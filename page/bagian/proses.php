<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $id_bagian                = $_POST['id_bagian'];
    $nama               = $_POST['nama'];

    $submit = $koneksi->query("INSERT INTO bagian VALUES(
        '$id_bagian',
        '$nama'
    )");

    if ($submit) {
        echo "<script>alert('Data Berhasil Ditambahkan !!');location.href='../bagian/index.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Ditambahkan !!');location.href='../bagian/proses.php';</script>";
    }
}else if (isset($_POST['edit'])) {
    $id_bagian  = $_POST['id_bagian'];
    $nama       = $_POST['nama'];
    
    $submit = $koneksi->query("UPDATE bagian SET
        id_bagian   = '$id_bagian',
        nama        = '$nama'
        WHERE
        id_bagian   = '$id_bagian';
    ");

    if ($submit) {
        echo "<script>alert('Data Berhasil Diubah !!');location.href='../bagian/index.php';</script>";
    }else{
        echo "<script>alert('Data Gagal Diubah !!');location.href='../bagian/edit.php';</script>";
    }
}else if (isset($_GET['id'])) {

    $delete = $koneksi->query("DELETE FROM bagian WHERE id_bagian = '$_GET[id]'");
} if ($delete) {
    echo "<script>alert('Data Berhasil Dihapus !!');location.href='../bagian/index.php';</script>";
}else{
    echo "<script>alert('Data Gagal Dihapus !!');location.href='../bagian/index.php';</script>";
}