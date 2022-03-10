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
        <h1>Input Data Obat</h1>

        <?php
        $sql = "SELECT * FROM data_obat WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
        }
        ?>

        <form action="update.php" method="POST">
            <div class="form-group mt-5">
                <label for="kode_obat">Kode Obat</label>
                <input value="<?php echo ($data['kode_obat']); ?>" name="kode_obat" type="text" class="form-control" placeholder="Masukkan kode obat">
            </div>
            <div class="form-group">
                <label for="nama_obat">Nama Obat</label>
                <input value="nama_obat" name="nama_obat" type="text" class="form-control" placeholder="Masukkan Nama Obat">
            </div>
            <div class="form-group">
                <label for="harga_beli">Harga Beli</label>
                <input value="harga_beli" name="harga_beli" type="text" class="form-control" placeholder="Masukkan Harga Beli">
            </div>
            <div class="form-group">
                <label for="harga_Jual">Harga Jual</label>
                <input value="harga_jual" name="harga_jual" type="text" class="form-control" placeholder="Masukkan Harga Jual">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input value="stok" name="stok" type="text" class="form-control" placeholder="Masukkan stok">
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input value="satuan" name="satuan" type="text" class="form-control" s placeholder="Masukkan satuan">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>