<?php 
    /**
     * NIM : 2257401018
     * NAMA : LITA YULIANA
     * KELAS : MI22A
     */ 
    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "DELETE FROM kategori WHERE name = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('location: kategori.php');

    } else {
        echo "Gagal Hapus Barang";
    }
?>
