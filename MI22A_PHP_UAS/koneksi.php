<?php
 /**
     * NIM    : 2257401082
     * NAMA   : NOUVAL FADILLAH
     * KELAS  : MI22A
     */ 
?>

<?php

    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "db_admin";

    $koneksi    = mysqli_connect($host, $user, $password, $dbname);

    if (mysqli_connect_errno()) {
        die("koneksi gagal karena : ". mysqli_connect_error());
    }

?>