<?php 

include "fungsi.php";
include "header.php";

session_start();
if(!isset($_SESSION['login'])) {
    header('location:auth/login.php');
    exit;
}

        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'wisata':
                  include "wisata.php";
                  break;
                case 'admin':
                  include "admin.php";
                  break;
                case 'form':
                  include "form.php";
                  break;
                case 'tambah_wisata':
                  include "tambah_wisata.php";
                  break;
                case 'tambah_admin':
                  include "tambah_admin.php";
                  break;
                case 'edit_wisata':
                  include "edit_wisata.php";
                  break;
                case 'edit_admin':
                  include "edit_admin.php";
                  break;
                default:
                  include "wisata.php";
                  break;
            }
        }

include "footer.php";
?>
        