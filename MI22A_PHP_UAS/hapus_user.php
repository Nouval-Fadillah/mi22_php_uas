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

    $sql = "DELETE FROM user WHERE id = '$id';";
    $resul = mysqli_query($koneksi, $sql);

    if ($resul) {
        header('location: user.php');
    }else{
        echo "gagal hapus";
    }

?>