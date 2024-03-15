<?php
    require_once('koneksi.php');
    $dataBarang=listbarang();
    $nomor=0;
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
                <h3 class="text-light ml-4">Peminjaman Barang</h3>
            </div>
            <a href="login.php" class="btn btn-outline-success my-2 my-sm-0">LOGOUT</a>
        </nav>
    </div>
    <div class ="container">
    <h1>List Barang</h1>   <button><a href="add.php">ADD</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">kategori</th>
      <th scope="col">Merk</th>
      <th scope="col">jumlah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($dataBarang as $data) : ?> 
    <?php $nomor++; ?>   
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo "$data[kode_brg]";?></td>
      <td><?php echo "$data[nama_brg]";?></td>
      <td><?php echo "$data[kategori]";?></td>
      <td><?php echo "$data[merk]";?></td>
      <td><?php echo "$data[jumlah]";?></td>
      <td>
      <?php echo "<a href='editb.php?id=$data[id]'><button class='btn btn-warning'>Edit</button></a> <a href='javascript:hapusData(".$data['id'].")'><button class='btn btn-danger'>Hapus</button></a>"; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    <script language="JavaScript" type="text/javascript">
      function hapusData(id){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'delete.php?id=' + id;
        }
      }
    </script>

    </body>
</html>
