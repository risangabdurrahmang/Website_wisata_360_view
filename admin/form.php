<?php

$data3 = queryAll("SELECT * FROM data_form");

?>

<h1 class='page mt-3 mb-4'>Data Form</h1>
<div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
  <div class='table-responsive w-100'>
    <table class='table table-striped table-bordered'>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Subjek</th>
          <th>Pesan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <?php
        $no = 1;
        foreach($data3 as $row) :
      ?>
      <tbody>
        <?php if(empty($data3)) : ?>
        <tr>
            <td colspan="4">Data tidak ditemukan!</td>
        </tr>
        <?php endif; ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row['Nama']; ?></td>
          <td><?php echo $row['Email']; ?></td>
          <td><?php echo $row['Subjek']; ?></td>
          <td><?php echo $row['Pesan']; ?></td>
          <td>
            <a onclick="return confirm('Apakah yakin menghapus data ?')" href="hapus_form.php?id_form=<?= $row['id_form']; ?>" class='btn btn-danger'><i class="bi bi-trash-fill"></i></a>
          </td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
  </div>
</div>