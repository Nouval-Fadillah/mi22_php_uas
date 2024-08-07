<?php
 /**
     * NIM    : 2257401082
     * NAMA   : NOUVAL FADILLAH
     * KELAS  : MI22A
     */ 
?>

<?php
    session_start();

    session_destroy();
    session_unset();

    header('location: login.php')
?>