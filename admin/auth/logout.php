<?php 
    session_start();
    // Untuk menghapus seluruh session
    session_destroy();
    header('location:login.php');
    exit;
?>