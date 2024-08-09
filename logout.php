<?php
     /**
     * NIM : 2257401018
     * NAMA : LITA YULIANA
     * KELAS : MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>