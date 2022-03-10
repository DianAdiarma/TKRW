<?php
include('koneksi.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM data_obat WHERE id='$id' ";
    $query=mysqli_query($conn, $sql);

    if($query){
        header('location:index.php');
    }else{
        echo "Gagal Hapus Data";
    }
}else{
    echo "Akses Dilarang";
}
