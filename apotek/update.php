<?php

$kode_obat = $_POST['kode_obat'];
$nama_obat = $_POST['nama_obat'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$stok = $_POST['stok'];
$satuan = $_POST['satuan'];
$id = date('YmdHis') .  rand(100, 999);

include 'koneksi.php';

$sql = "UPDATE  data_obat SET kode_obat='$kode_obat',nama_obat='$nama_obat',harga_beli='$harga_beli',harga_jual='$harga_jual',stok='$stok',satuan='$satuan' WHERE id='$id' ";

if (mysqli_query($conn, $sql)) {
    header('location:index.php');
} else {
    echo "Gagal Edit Data";
}
