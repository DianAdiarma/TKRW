<?php

$kode_obat = $_POST['kode_obat'];
$nama_obat = $_POST['nama_obat'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];
$id = date('YmdHis') .  rand(100, 999);

include 'koneksi.php';

$sql = "INSERT INTO data_obat VALUES ('$id','$kode_obat','$nama_obat','$harga_beli','$harga_jual','$stok','$satuan')";

if (mysqli_query($conn, $sql)) {
    header('location:index.php');
} else {
    echo "Gagal Tambah Data";
}
