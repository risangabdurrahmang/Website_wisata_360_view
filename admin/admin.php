<?php 

  $data2 = queryAll("SELECT * FROM tabel_admin");

?>

<h1 class='page mt-3 mb-4'>Data Admin</h1>
<a href="tambah_admin.php" class='btn btn-primary mb-3'>Tambah Admin</a>
<div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
  <div class='table-responsive w-100'>
    <table class='table table-striped table-bordered'>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Password</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <?php
        $no = 1;
        foreach($data2 as $row) :
      ?>
      <tbody>
          <td><?= $no++; ?></td>
          <?php if(empty($data2)) : ?>
            <td colspan="4">Data tidak ditemukan!</td>
          <?php endif; ?>
          <td><?= $row['nama_admin']; ?></td>
          <td><?= $row['password']; ?></td>
          <td>
            <a onclick="return confirm('Apakah yakin menghapus data ?')" href="hapus_admin.php?id_admin=<?= $row['id_admin']; ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
          </td>
        </tr>              
      </tbody>
      <?php endforeach; ?> 
    </table>
  </div>
</div>            