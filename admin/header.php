<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets2/dashboard.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  </head>
  <body>

    <header class='navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow'>
      <a class='navbar-brand col-md-3 col-lg-2 me-0 px-3' href='#'>WISABA</a>
      <button class='navbar-toggler position-absolute d-md-none collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#sidebarMenu' aria-controls='sidebarMenu' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <div class='navbar-nav'>
        <div class='nav-item text-nowrap'>
          <a class='nav-link px-3' href="auth/logout.php">Logout</a>
        </div>
      </div>
    </header>

    <div class='container-fluid'>
      <div class='row'>
        <nav id='sidebarMenu' class='col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse'>
          <div class='position-sticky pt-3'>
            <ul class='nav flex-column'>
              <li class='nav-item'>
                <a class='nav-link' href="index.php?page=wisata">
                  <i class='bi bi-card-image p-2'></i>
                  Data Wisata
                </a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href="index.php?page=admin">
                  <i class='bi bi-person-circle p-2'></i>
                  Data Admin
                </a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href="index.php?page=form">
                  <i class='bi bi-chat-right-text p-2'></i>
                  Data Form
                </a>
              </li>
            </ul>
            </ul>
          </div>
        </nav>

        <main class='col-md-9 ms-sm-auto col-lg-10 px-md-4' id='contents'>