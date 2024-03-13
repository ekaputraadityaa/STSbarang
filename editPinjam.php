<?php
require_once 'koneksi.php';
if (isset($_POST["edit"])) {
    $id = $_POST["id"];
    $idBtn = $_POST["edit"];
    $data = editpinjam("peminjaman", $id);
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
        <h4 class="text-center">Ubah Peminjaman</h4>
        <form class="" method="post">
            <input type="hidden" name="id" value="<?= $pinjam['id']; ?>">
            <div class="form-group">
                <label for="tgl_pinjam">Username</label>
                <input type="text" value="<?= $pinjam['tgl_pinjam']; ?>" class="form-control" name="username" id="tgl_pinjam" placeholder="masukan tanggal pinjam" required>
            </div>
            <div class="form-group">
                <label for="tgl_kembali">Kode Barang</label>
                <input type="text" value="<?= $pinjam['tgl_kembali']; ?>" class="form-control" name="kode_brg" id="tgl_kembali" placeholder="masukan tanggal kembali" required>
            </div>
            <div class="form-group">
                <label for="no_identitas">Nama Barang</label>
                <input type="text" value="<?= $pinjam['no_identitas']; ?>" class="form-control" name="namabrng" id="no_identitas" placeholder="masukan no identitas" required>
            </div>
            <div class="form-group">
                <label for="kode_barang">Jumlah</label>
                <input type="text" value="<?= $pinjam['kode_barang']; ?>" class="form-control" name="jumlahh" id="kode_barang" placeholder="masukan kode barang" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Tanggal Kembali</label>
                <input type="date" value="<?= $pinjam['jumlah']; ?>" class="form-control" name="tanggal_kembali" id="jumlah" placeholder="masukan jumlah" required>
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