<?php
    include "admin/fungsi.php";
    include "inc_header.php";

    // Jika tidak ada id di url
    if(!isset($_GET['id_wisata'])) {
      header('location:../');
      exit;
    }
    // Ambil id di url
    // untuk menghindari sql injection gunakan fungsi real_escape_string pada fungsi mysqli
    $conn = koneksi();
    $id_wisata = $conn->real_escape_string($_GET['id_wisata']);

    // menampilkan data wisata berdasarkan id
    $query = mysqli_query($conn, "SELECT * FROM tabel_objek_wisata WHERE id_wisata = '$id_wisata'");

?>
<?php
    while($rows = mysqli_fetch_array($query)) {
?>
    <main id='main' class="halaman">
      <section class='breadcrumbs'>
          <div class='container'>
              <div class='d-flex justify-content-between align-items-center'>
                  <h2>Details</h2>
                  <ol>
                      <li><a href='index.php#tour'>Tour</a></li>
                      <li><?php echo $rows['nama_wisata']; ?></li>
                  </ol>
              </div>
          </div>
      </section>
        
      <!-- ======= Curug Details Section ======= -->
      <section id='tour-details' class='tour-details'>
            <div class='container'>
               
                <div class='row gy-4'>
                    <div class='col-lg-8'>
                        <div class='tour-details-slider'>
                            <div class='align-items-center'>
                                <div>
                                  <img src="img/<?php echo $rows['gambar_detail']; ?>" alt='gambar' data-bs-toggle='modal' data-bs-target='#exampleModal' type='button'>
                                </div>
                            </div>
                        </div>
                    </div>

                  <div class='col-lg-4'>
                      <div class='card tour-info shadow p-3 rounded'>
                          <h3><?php echo $rows['nama_wisata']; ?></h3>
                          <ul>
                              <li><strong>Letak</strong>: <?php echo $rows['letak']; ?></li>
                              <li><strong>Harga tiket</strong>: <?php echo $rows['harga_tiket']; ?></li>
                              <li><strong>Jam operasional</strong>: <?php echo $rows['jam_operasional']; ?></li>
                          </ul>
                      </div>
                      <div class='tour-description ms-3'>
                        <p class="text-align-justify"><?php echo $rows['deskripsi']; ?></p>
                      </div>
                  </div>
                </div>
            </div>
      </section>
      <!-- End Curug Details Section -->

    </main><!-- End #main -->

    <!-- Modal -->
    <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content align-items-center justify-content-center'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Scan Untuk Melihat Lokasi Wisata</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <img src="img/<?php echo $rows['qrcode']; ?>" alt='' style='width: 300px; height:300px'>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php 
  include "inc_footer.php";
?>