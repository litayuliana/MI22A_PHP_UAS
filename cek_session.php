<?php
 /**
     *NIM : 2257401018
     * NAMA : LITA YULIANA
     * KELAS : MI22A
     */ 
session_start();
if (!isset($_SESSION['user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>