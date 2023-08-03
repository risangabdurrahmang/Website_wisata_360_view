<?php
    include "admin/fungsi.php";

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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="generator" content="" />
  <title>Wisata Baturraden</title>

  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css" />

  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <nav class='navbar navbar-expand-lg navbar-dark fixed-top'>
    <div class='container-fluid'>
      <div class='navbar-brand' href='#'>WISABA</div>
      <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav ms-auto mb-2 mb-lg-0'>
          <li class='nav-item'>
            <a class='nav-link' href='index.php#myCarousel'>Home</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='index.php#about'>About</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='index.php#tour'>Tour</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='index.php#contact'>Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php
  while($rows = mysqli_fetch_array($query)) {
?>
  <main>
      <div id='panorama'></div>
  </main>

  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

  <script>
    pannellum.viewer('panorama', {
      type: 'equirectangular',
      panorama: 'img/<?php echo $rows['gambar_360']; ?>',
      autoLoad: true,
      autoRotate: -2,
    });
  </script>
<?php } ?>
</body>

</html>