<?php
     /**
     * NIM : 2257401070
     * NAMA : HARIS MUNANDAR
     * KELAS : MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>