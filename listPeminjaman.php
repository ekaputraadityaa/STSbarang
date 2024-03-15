<?php
require_once("koneksi.php");
$dataPeminjaman = DataPeminjaman();
$number = 0
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
  <br><br><br>
    <div class="fixed-top">
        <nav class="navbar navbar-dark bg-dark">
            <div class="d-flex">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        &equiv;
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                        <a class="dropdown-item" href="listBarang.php">Data Barang</a>
                        <a class="dropdown-item" href="listPeminjaman.php">Peminjaman</a>
                        <a class="dropdown-item" href="listUser.php">User</a>
                    </div>
                </div>
                <h3 class="text-light ml-4">list Peminjaman</h3>
            </div>
            <a href="login.php" class="btn btn-outline-success my-2 my-sm-0">LOGOUT</a>
        </nav>
    </div>
    <div class ="container">
    <h1>List Peminjaman</h1>   <button><a href="add1.php">ADD</a></button>
    <table class="table w-100 mt-2" id="table">
    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Peminjaman</th>
                        <th scope="col">Tanggal Pengembalian</th>
                        <th scope="col">No Identitas</th>
                        <th scope="col">Kode Barang</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataPeminjaman as $data): ?>
                        <?php $number++ ?>
                        <tr>
                            <td scope="row">
                                <?= $number; ?>
                            </td>
                            <td scope="row">
                                <?= $data['tgl_pinjam']; ?>
                            </td>
                            <td scope="row">
                                <?= $data['tgl_kembali']; ?>
                            </td>
                            <td scope="row">
                                <?= $data['no_identitas']; ?>
                            </td>
                            <td scope="row">
                                <?= $data['kode_barang']; ?>
                            </td>
                            <td scope="row">
                                <?= $data['jumlah']; ?>
                            </td>
                                <td>
                                <?php echo "<a href='editPinjam.php?id=$data[id_pinjam]'><button class='btn btn-warning'>Edit</button></a> <a href='javascript:hapusData(".$data['id_pinjam'].")'><button class='btn btn-danger'>Hapus</button></a>"; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
    <script language="JavaScript" type="text/javascript">
      function hapusData(id){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'delete1.php?id=' + id;
        }
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
