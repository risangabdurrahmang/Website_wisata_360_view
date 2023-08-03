<?php 
    require 'fungsi.php';

    // Cek Login
    session_start();
    if(!isset($_SESSION['login'])) {
        header('location:auth/login.php');
        exit;
    }

    $id_admin = $_GET ['id_admin'];

    if(empty($id_admin)) {
        header('location:admin.php');
        exit;
    }
    
    if(hapusadm($id_admin) > 0) {
        echo "<script>
            alert('Berhasil');
            document.location.href = 'index.php?page=admin';
        </script>";
    } else {
        echo "<script>
            alert('Gagal');
            document.location.href = 'index.php?page=admin';
        </script>";
    }
?>