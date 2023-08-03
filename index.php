<?php
include "admin/fungsi.php";
include "inc_header.php";
?>

<!-- HOME -->
<div class='halaman carousel slide' id='myCarousel' data-bs-ride='carousel'>
  <div class='carousel-indicators'>
    <button type='button' data-bs-target='#myCarousel' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
    <button type='button' data-bs-target='#myCarousel' data-bs-slide-to='1' aria-label='Slide 2'></button>
    <button type='button' data-bs-target='#myCarousel' data-bs-slide-to='2' aria-label='Slide 3'></button>
  </div>
  <div class='carousel-inner'>
    <div class='carousel-item active'>
      <img src='img/satu.jpg' alt='' />
    </div>
    <div class='carousel-item'>
      <img src='img/dua.jpg' alt='' />
    </div>
    <div class='carousel-item'>
      <img src='img/tiga.jpg' alt='' />
    </div>
  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#myCarousel' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#myCarousel' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>
<!-- END HOME -->

<!-- ABOUT -->
<section id='about' class='halaman p-5'>
  <div class='container mt-5'>
    <div class='row align-items-center justify-content-between'>
      <div class='col-md-6'>
        <img src='img/about.jpg' class='img-fluid' alt='foto' style='border-radius: 10px' />
      </div>
      <div class='card-about col-md-6 mt-3 text-dark shadow p-3 mb-5 rounded'>
        <div class='h-100 p-3'>
          <h1 class='fw-bold'>Apa itu WISABA?</h1>
          <p class='fs-4 lh-base' style='text-align: justify;'>
            WISABA merupakan aplikasi sistem informasi web yang menyajikan berbagai tempat wisata yang ada di Baturraden, Purwokerto dengan foto pemandangan 360 derajat
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End ABOUT -->

<?php
$tampil = queryAll("SELECT * FROM tabel_objek_wisata");
?>
<!-- TOUR -->
<section id='tour' class='halaman py-5 text-dark'>
  <div class='container'>
    <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5'>
      <?php
      foreach ($tampil as $data) :
      ?>
        <div class='col'>
          <div class='card shadow-sm mt-5'>
            <img src="img/<?php echo $data['gambar_tour']; ?>">
            <div class='card-body'>
              <p class='card-text'><?php echo $data['nama_wisata']; ?></p>
              <div class='d-flex justify-content-center align-items-center'>
                <a href="view.php?id_wisata=<?= $data['id_wisata']; ?>" class='btn btn-sm btn-primary'>View 360</a>
                <a href="details.php?id_wisata=<?= $data['id_wisata']; ?>" class='btn btn-sm btn-primary ms-4'>Detail</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- End TOUR -->

<!-- CONTACT -->
<section id='contact' class='contact'>
  <div class='container'>
    <div class='section-title'>
      <h2>Contact</h2>
    </div>

    <div class='row contact-card shadow p-3 mb-5 rounded'>
      <div class='col-lg-5'>
        <div class='info'>
          <div class='address mb-5'>
            <i class='bi bi-geo-alt'></i>
            <h4>Lokasi :</h4>
            <p>Jl. DI. Panjaitan No.128 Karangreja, Purwokerto Kidul</p>
          </div>
          <div class='email mb-5'>
            <i class='bi bi-envelope'></i>
            <h4>Email :</h4>
            <p>wisaba@gmail.com</p>
          </div>
          <div class='phone mb-5'>
            <i class='bi bi-phone'></i>
            <h4>Nomor :</h4>
            <p>+6282243217777</p>
          </div>
        </div>
      </div>

      <div class='col-lg-7'>
        <form action='' method='post' role='form'>
          <div class='row'>
            <div class='col-md-6 form-group'>
              <input type='text' name='Nama' class='form-control' id='name' placeholder='Name' required />
            </div>
            <div class='col-md-6 form-group mt-3 mt-md-0'>
              <input type='email' name='Email' class='form-control' id='email' placeholder='Email' required />
            </div>
          </div>
          <div class='form-group mt-3'>
            <input type='text' class='form-control' name='Subject' id='subject' placeholder='Subject' required />
          </div>
          <div class='form-group mt-3'>
            <textarea class='form-control' name='Message' rows='5' placeholder='Message' required></textarea>
          </div>
          <button class='btn btn-primary mt-3' type='submit' name='proses' mt-4'>Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End CONTACT -->

<?php

$conn = koneksi();

if (isset($_POST['proses'])) {
  $nama = $_POST['Nama'];
  $email = $_POST['Email'];
  $subject = $_POST['Subject'];
  $message = $_POST['Message'];
  mysqli_query($conn, "INSERT INTO data_form (Nama, Email, Subjek, Pesan) VALUES ('$nama', '$email', '$subject', '$message')") or die(mysqli_error($conn));

  echo "<script>
                alert('Berhasil Disimpan');
             </script>";
}
?>

<?php
include "inc_footer.php";
?>