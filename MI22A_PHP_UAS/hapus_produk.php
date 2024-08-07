<?php
 /**
     * NIM    : 2257401082
     * NAMA   : NOUVAL FADILLAH
     * KELAS  : MI22A
     */ 
?>

<?php
include 'session_login.php';
    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "DELETE FROM produk WHERE kode_produk = '$id';";
    $resul = mysqli_query($koneksi, $sql);

    if ($resul) {
        header('location: produk.php');
    }else{
        echo "gagal hapus";
    }

?>