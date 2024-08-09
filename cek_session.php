<?php
 /**
     * NIM : 2257401070
     * NAMA : HARIS MUNANDAR
     * KELAS MI22A
     */ 
session_start();
if (!isset($_SESSION['user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>