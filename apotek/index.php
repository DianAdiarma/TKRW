<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Apotek</title>
</head>

<body>
    <div class="container">
        <h1>Data Obat</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Kode Obat</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">harga Beli</th>
                    <th scope="col">harga Jual</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Action</th>
                </tr>

                <?php

                include 'koneksi.php';

                $sql = "SELECT * FROM data_obat";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($data = mysqli_fetch_assoc($result)) { ?>

                        <tr>
                            <td><?php echo $data["kode_obat"] ?></td>
                            <td><?php echo $data["nama_obat"] ?></td>
                            <td><?php echo $data["harga_beli"] ?></td>
                            <td><?php echo $data["harga_jual"] ?></td>
                            <td><?php echo $data["stok"] ?></td>
                            <td><?php echo $data["satuan"] ?></td>
                            <td>
                                <a class="btn btn-danger" href="">Hapus</a>
                                <a class="btn btn-primary" href="edit.php?id=<?php echo $data["id"] ?>">Edit</a>
                            </td>
                        </tr>
                <?php }
                } else ?>

            </thead>
        </table>
    </div>
</body>

</html>