<?php

    require 'fungsi.php';
    require 'header.php';

    session_start();
    if(!isset($_SESSION['login'])) {
      header('location:auth/login.php');
      exit;
    }

    // Jika tombol daftar di klik
    if(isset($_POST['register'])) {
      if(register($_POST) > 0) {
         echo "<script>
              alert('Berhasil');
              document.location.href = 'admin.php';
         </script>";
      } else {
          echo "Gagal";
      }
  }

?>

<h2 class='page mt-3 mb-4'>Tambah Admin</h2>
<div class="card mb-4">
    <div class="card-body">
        <form action="" method="POST">
          <div class='mb-3'>
            <label for='formGroupExampleInput2' class='form-label'>Nama</label>
            <input type='text' class='form-control' id='nama_admin' name='nama_admin'>
          </div>
          <div class='mb-3'>
            <label for='formGroupExampleInput2' class='form-label'>Password</label>
            <input type='password' class='form-control' id='password' name='password'>
          </div>
          <div class='mb-3'>
            <label for='formGroupExampleInput2' class='form-label'>Konfirmasi Password</label>
            <input type='password' class='form-control' id='password2' name='password2'>
          </div>
          <div class='modal-footer'>
            <button type='submit' name="register" class='btn btn-primary'>Tambah</button>
          </div>
        </form>
    </div>
</div>