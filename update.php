<?php
    require_once("koneksi.php");
    $id = $_POST['id'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_Kembali = $_POST['tgl_kembali'];
    $no_identitas = $_POST['no_identitas'];
    $kode_brg = $_POST['kode_brg'];
    $jumlah = $_POST['jumlah'];

    $sql2=update("barang", $id, $kode, $nama, $kategori, $merk, $jumlah);
    if ($sql2) {
        header("location:listBarang.php");
    }
    
?>