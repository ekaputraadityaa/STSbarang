<?php
require_once 'koneksi.php';
if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $idBtn = $_POST["edit"];
    $data = editbarang("barang", $id);
} else {
    null;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container mt-5">
        <h4 class="text-center">Ubah Barang</h4>
        <form class="" method="post">
            <input type="hidden" name="id_pinjam" value="<?= $pinjam['id_pinjam']; ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" value="<?= $pinjam['username']; ?>" class="form-control" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="kode_brg">Kode Barang</label>
                <input type="text" value="<?= $pinjam['kode_brg']; ?>" class="form-control" name="kode_brg" id="kode_brg" placeholder="Kode Barang" required>
            </div>
            <div class="form-group">
                <label for="namabrng">Nama Barang</label>
                <input type="text" value="<?= $pinjam['nama_brg']; ?>" class="form-control" name="namabrng" id="namabrng" placeholder="Nama Barang" required>
            </div>
            <div class="form-group">
                <label for="jumlahh">Jumlah</label>
                <input type="text" value="<?= $pinjam['jumlah']; ?>" class="form-control" name="jumlahh" id="jumlahh" placeholder="jumlahh" required>
            </div>
            <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" value="<?= $pinjam['tanggal_kembali']; ?>" class="form-control" name="tanggal_kembali" id="tanggal_kembali" placeholder="Tanggal Kembali" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" style="float: right;">Ubah</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>