<?php 
    require '../fungsi.php';

    if(isset($_POST['login'])) {
        login($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/" />

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/style.css" rel="stylesheet" />
  </head>
  <body>
    <div class='wrapper'>
      <div class='card'>
          <form action='' method="POST" class='d-flex flex-column align-items-center'>
            <div class='h3 text-center text-white mb-4 fw-bold mt-4'>LOGIN</div>
            <div class='d-flex input-field my-3 mb-4 w-100'>
              <span class='far fa-user p-2'></span><input type='text' name="nama_admin" placeholder='Username' required class='form-control' />
            </div>
            <div class='d-flex input-field mb-4 w-100'>
                <span class='fas fa-lock p-2'></span> <input type='password' name="password" placeholder='Password' required class='form-control' id='pwd' /> <button class='btn' onclick='showPassword()'><span class='fas fa-eye-slash'></span></button>
            </div>
              <input class='btn btn-primary fw-bold mb-3' type="submit" name="login" role='button' value="Login"></input>
              <div class='mb-3'><span class='text-light-white'>Don't have an account?</span> <a href='SignUp.php'>Sign Up</a></div>
          </form>
      </div>
    </div>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="../assets/main.js"></script>
  </body>
</html>