<?php 
require_once("koneksi.php");
$id = $_GET['id'];
$sql = Delete1("peminjaman", $id);
if ($sql) {
    header("location:listPeminjaman.php");
}else
{
    echo"Hapus Gagal";
}

?>