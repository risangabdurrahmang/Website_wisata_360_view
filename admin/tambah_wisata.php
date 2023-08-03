<?php

    require 'fungsi.php';
    require 'header.php';

    session_start();
    if(!isset($_SESSION['login'])) {
      header('location:auth/login.php');
      exit;
    }

    if(isset($_POST['tambahwst'])) {
      if(tambahwst($_POST) > 0) {
          echo "Berhasil";
      } else {
          echo "Gagal";
      }
      
    }
?>

<h2 class='page mt-3 mb-4'>Tambah Wisata</h2>
<div class="card mb-4">
    <div class="card-body">
        <form action="" method='POST' enctype="multipart/form-data">
              <div class='mb-3'>
                <label class='form-label'>Nama</label>
                <input type='text' name="nama_wisata" class='form-control'>
              </div>
              <div class='mb-3'>
                <label class='form-label'>Letak</label>
                <input type='text' name="letak" class='form-control'>
              </div>
              <div class='mb-3'>
                <label class='form-label'>Harga Tiket</label>
                <input type='text' name="harga_tiket" class='form-control'>
              </div>
              <div class='mb-3'>
                <label class='form-label'>Jam Operasional</label>
                <input type='text' name="jam_operasional" class='form-control'>
              </div>
              <div class='mb-3'>
                <label class='form-label'>Gambar Tour</label>
                <input class='gambar_tour' type='file' name="gambar_tour" onchange="previewImage()">
                <td colspan="3">
                    <img src="../img/gambar_default.png" width="120" style="display: block; margin: auto;" class="img-preview">
                </td>
              </div>
              <div class='mb-3'>
                <label class='form-label'>Gambar Detail</label>
                <input class='gambar_detail' type='file' name="gambar_detail" onchange="previewImage2()">
                <td colspan="3">
                    <img src="../img/gambar_default.png" width="120" style="display: block; margin: auto;" class="img-preview2">
                </td>
              </div>
              <div class='mb-3'>
                <label class='form-label'>Gambar 360</label>
                <input class='gambar_360' type='file' name="gambar_360" onchange="previewImage3()">
                <td colspan="3">
                    <img src="../img/gambar_default.png" width="120" style="display: block; margin: auto;" class="img-preview3">
                </td>
              </div>
              <div class='mb-3'>
                <label class='form-label'>QR Code</label>
                <input class='qrcode' type='file' name="qrcode" onchange="previewImage4()">
                <td colspan="3">
                    <img src="../img/gambar_default.png" width="120" style="display: block; margin: auto;" class="img-preview4">
                </td>
              </div>
              <div class='mb-3'>
                <label class='form-label'>Deskripsi</label>
                <textarea type="text" class='form-control' rows='3' name="deskripsi"></textarea>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Tutup</button>
                <button type='submit' name="tambahwst" class='btn btn-primary'>Tambah</button>
              </div>
        </form>
    </div>
</div>

<?php 

require 'footer.php';

?>