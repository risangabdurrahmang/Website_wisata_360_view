<?php 
    require 'fungsi.php';

    // Cek Login
    session_start();
    if(!isset($_SESSION['login'])) {
        header('location:auth/login.php');
        exit;
    }

    $id_form = $_GET ['id_form'];

    if(empty($id_form)) {
        header('location:form.php');
        exit;
    }
    
    if(hapusfm($id_form) > 0) {
        echo "<script>
            alert('Berhasil');
            document.location.href = 'form.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal');
            document.location.href = 'form.php';
        </script>";
    }
?>