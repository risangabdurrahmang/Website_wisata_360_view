<?php

    function koneksi() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_websitepariwisata";

    $conn = new mysqli($host, $user, $pass, $db);

    return $conn;
    }
    // Untuk menampikan 1 baris pada table
    function query($s) {
    $conn = koneksi();

    $data = $conn->query($s);

    return $data->fetch_assoc();
    }

    // Untuk menampilkan banyak data
    function queryAll($s) {
    $conn = koneksi();

    $data = $conn->query($s);

    $rows = [];
    while($row = $data->fetch_assoc()) {
        $rows[] = $row;
    }

    return $rows;
    }

    // Upload Gambar
    function upload() {
        $nama_file = $_FILES['gambar_tour']['name'];
        $tipe_file = $_FILES['gambar_tour']['type'];
        $error = $_FILES['gambar_tour']['error'];
        $tmp_file = $_FILES['gambar_tour']['tmp_name'];
        $lokasi_upload = 'assets/img/uploads/';

        // Ketika gambar kosong / tidak dipilih
        if($error == 4) {
           return 'gambar_default.png';
        }

        // Cek ekstensi file
        $daftar_tipe_file = ['jpg','jpeg','png'];
        $ekstensi_file = explode('.', $nama_file);
        $ekstensi_file = strtolower(end($ekstensi_file));
        

        if(!in_array($ekstensi_file, $daftar_tipe_file)) {
            echo "<script>
                alert('Ekstensi file harus jpg, jpeg dan png');
            </script>";
            return false;
        }

        // Cek type file
        if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
            echo "<script>
                alert('File bukan gambar');
            </script>";
            
            return false;
        }

        move_uploaded_file($tmp_file, $lokasi_upload.$nama_file);
        
        return $nama_file;
    }

        // Upload Gambar
        function upload2() {
            $nama_file = $_FILES['gambar_detail']['name'];
            $tipe_file = $_FILES['gambar_detail']['type'];
            $error = $_FILES['gambar_detail']['error'];
            $tmp_file = $_FILES['gambar_detail']['tmp_name'];
            $lokasi_upload = 'assets/img/uploads/';
    
            // Ketika gambar kosong / tidak dipilih
            if($error == 4) {
               return 'gambar_default.png';
            }
    
            // Cek ekstensi file
            $daftar_tipe_file = ['jpg','jpeg','png'];
            $ekstensi_file = explode('.', $nama_file);
            $ekstensi_file = strtolower(end($ekstensi_file));
            
    
            if(!in_array($ekstensi_file, $daftar_tipe_file)) {
                echo "<script>
                    alert('Ekstensi file harus jpg, jpeg dan png');
                </script>";
                return false;
            }
    
            // Cek type file
            if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
                echo "<script>
                    alert('File bukan gambar');
                </script>";
                
                return false;
            }
    
            move_uploaded_file($tmp_file, $lokasi_upload.$nama_file);
            
            return $nama_file;
        }
        // Upload Gambar
        function upload3() {
            $nama_file = $_FILES['gambar_360']['name'];
            $tipe_file = $_FILES['gambar_360']['type'];
            $error = $_FILES['gambar_360']['error'];
            $tmp_file = $_FILES['gambar_360']['tmp_name'];
            $lokasi_upload = 'assets/img/uploads/';
    
            // Ketika gambar kosong / tidak dipilih
            if($error == 4) {
               return 'gambar_default.png';
            }
    
            // Cek ekstensi file
            $daftar_tipe_file = ['jpg','jpeg','png'];
            $ekstensi_file = explode('.', $nama_file);
            $ekstensi_file = strtolower(end($ekstensi_file));
            
    
            if(!in_array($ekstensi_file, $daftar_tipe_file)) {
                echo "<script>
                    alert('Ekstensi file harus jpg, jpeg dan png');
                </script>";
                return false;
            }
    
            // Cek type file
            if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
                echo "<script>
                    alert('File bukan gambar');
                </script>";
                
                return false;
            }
    
            move_uploaded_file($tmp_file, $lokasi_upload.$nama_file);
            
            return $nama_file;
        }
        // Upload Gambar
        function upload4() {
            $nama_file = $_FILES['qrcode']['name'];
            $tipe_file = $_FILES['qrcode']['type'];
            $error = $_FILES['qrcode']['error'];
            $tmp_file = $_FILES['qrcode']['tmp_name'];
            $lokasi_upload = 'assets/img/uploads/';
    
            // Ketika gambar kosong / tidak dipilih
            if($error == 4) {
               return 'gambar_default.png';
            }
    
            // Cek ekstensi file
            $daftar_tipe_file = ['jpg','jpeg','png'];
            $ekstensi_file = explode('.', $nama_file);
            $ekstensi_file = strtolower(end($ekstensi_file));
            
    
            if(!in_array($ekstensi_file, $daftar_tipe_file)) {
                echo "<script>
                    alert('Ekstensi file harus jpg, jpeg dan png');
                </script>";
                return false;
            }
    
            // Cek type file
            if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
                echo "<script>
                    alert('File bukan gambar');
                </script>";
                
                return false;
            }
    
            move_uploaded_file($tmp_file, $lokasi_upload.$nama_file);
            
            return $nama_file;
        }

    function tambahwst($data)
    {
        $conn = koneksi();

        $nama_wisata = htmlspecialchars($data['nama_wisata']);
        $letak = htmlspecialchars($data['letak']);
        $harga_tiket = htmlspecialchars($data['harga_tiket']);
        $jam_operasional = htmlspecialchars($data['jam_operasional']);
        $deskripsi = htmlspecialchars($data['deskripsi']);

        
        // Upload Gambar
        $gambar_tour = upload();
        $gambar_detail = upload2();
        $gambar_360 = upload3();
        $qrcode = upload4();

        if(!$gambar_tour && $gambar_detail && $gambar_360 && $qrcode) {
            return false;
        }

        $conn->query("INSERT INTO tabel_objek_wisata(nama_wisata,letak,harga_tiket,jam_operasional,gambar_tour,gambar_detail,gambar_360,qrcode,deskripsi) VALUES('$nama_wisata', '$letak', '$harga_tiket', '$jam_operasional', '$gambar_tour', '$gambar_detail', '$gambar_360', '$qrcode', '$deskripsi')");

        return $conn->affected_rows;
    }

    // Edit
    function editwst($data) {
        
        $conn = koneksi();

        $id_wisata = $data['id_wisata'];
        $nama_wisata = htmlspecialchars($data['nama_wisata']);
        $letak = htmlspecialchars($data['letak']);
        $harga_tiket = htmlspecialchars($data['harga_tiket']);
        $jam_operasional = htmlspecialchars($data['jam_operasional']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $gambar_lama = $data['gambar_lama'];
        $gambar_lama2 = $data['gambar_lama2'];
        $gambar_lama3 = $data['gambar_lama3'];
        $gambar_lama4 = $data['gambar_lama4'];

        // Jika tidak upload gambar
        if(empty($_FILES['gambar_tour']['name']) && empty($_FILES['gambar_detail']['name']) && empty($_FILES['gambar_360']['name']) && empty($_FILES['qrcode']['name'])) {
            $edit = $conn->query("UPDATE tabel_objek_wisata SET nama_wisata = '$nama_wisata', letak = '$letak', harga_tiket = '$harga_tiket', jam_operasional = '$jam_operasional', deskripsi = '$deskripsi' WHERE id_wisata = '$id_wisata'");
            if($edit) {
                echo "<script>
                    alert('Berhasil');
                    document.location.href = 'index.php?page=wisata';
                </script>";
            } else {
                echo "<script>
                    alert('Gagal');
                    
                </script>";
            }
        } else {
            $gambar_tour = upload();
            $gambar_detail = upload2();        
            $gambar_360 = upload3();        
            $qrcode = upload4();        

            if(!$gambar_tour && !$gambar_detail && !$gambar_360 && !$qrcode) {
                return false;
            }
    
            if($gambar_tour == 'gambar_default.png') {
                $gambar_tour = $gambar_lama;
            }
            if($gambar_detail == 'gambar_default.png') {
                $gambar_detail = $gambar_lama2;
            }
            if($gambar_360 == 'gambar_default.png') {
                $gambar_360 = $gambar_lama3;
            }
            if($qrcode == 'gambar_default.png') {
                $qrcode = $gambar_lama4;
            }
            
            $gbr = query("SELECT * FROM tabel_objek_wisata WHERE id_wisata = '$id_wisata'");
            $lokasi_file = 'assets/img/uploads';
    
            if($gbr['gambar_tour'] != 'gambar_default.png') {
                unlink($lokasi_file.$gbr['gambar_tour']);
            }

            $gbr2 = query("SELECT * FROM tabel_objek_wisata WHERE id_wisata = '$id_wisata'");
            $lokasi_file2 = 'assets/img/uploads';
    
            if($gbr2['gambar_detail'] != 'gambar_default.png') {
                unlink($lokasi_file2.$gbr2['gambar_detail']);
            }

            $gbr3 = query("SELECT * FROM tabel_objek_wisata WHERE id_wisata = '$id_wisata'");
            $lokasi_file3 = 'assets/img/uploads';
    
            if($gbr3['gambar_360'] != 'gambar_default.png') {
                unlink($lokasi_file3.$gbr3['gambar_360']);
            }

            $gbr4 = query("SELECT * FROM tabel_objek_wisata WHERE id_wisata = '$id_wisata'");
            $lokasi_file4 = 'assets/img/uploads';
    
            if($gbr4['qrcode'] != 'gambar_default.png') {
                unlink($lokasi_file4.$gbr4['qrcode']);
            }

            $edit = $conn->query("UPDATE tabel_objek_wisata SET nama_wisata = '$nama_wisata', letak = '$letak', harga_tiket = '$harga_tiket', jam_operasional = '$jam_operasional', gambar_tour = '$gambar_tour', gambar_detail = '$gambar_detail', gambar_360 = '$gambar_360', qrcode = '$qrcode', deskripsi = '$deskripsi' WHERE id_wisata = '$id_wisata'");
            if($edit) {
                echo "<script>
                    alert('Berhasil');
                    document.location.href = 'index.php?page=wisata';
                </script>";
            } else {
                echo "<script>
                    alert('Gagal');
                    
                </script>";
            }
        }
    }

    // Hapus
    function hapuswst($id_wisata) {
        $conn = koneksi();

        $gambar_tour = query("SELECT * FROM tabel_objek_wisata WHERE id_wisata = '$id_wisata'");
        $lokasi_file = 'assets/img/uploads';
        $gambar_detail = query("SELECT * FROM tabel_objek_wisata WHERE id_wisata = '$id_wisata'");
        $lokasi_file2 = 'assets/img/uploads';
        $gambar_360 = query("SELECT * FROM tabel_objek_wisata WHERE id_wisata = '$id_wisata'");
        $lokasi_file3 = 'assets/img/uploads';
        $qrcode = query("SELECT * FROM tabel_objek_wisata WHERE id_wisata = '$id_wisata'");
        $lokasi_file4 = 'assets/img/uploads';

        $conn->query("DELETE FROM tabel_objek_wisata WHERE id_wisata = '$id_wisata'");

        if($gambar_tour['gambar_tour'] != 'gambar_default.png') {
            unlink($lokasi_file.$gambar_tour['gambar_tour']);
        }
        if($gambar_detail['gambar_detail'] != 'gambar_default.png') {
            unlink($lokasi_file2.$gambar_detail['gambar_detail']);
        }
        if($gambar_360['gambar_360'] != 'gambar_default.png') {
            unlink($lokasi_file3.$gambar_360['gambar_360']);
        }
        if($qrcode['qrcode'] != 'gambar_default.png') {
            unlink($lokasi_file4.$qrcode['qrcode']);
        }

        return $conn->affected_rows;
    }

    // Hapus
    function hapusadm($id_admin) {
    $conn = koneksi();

    $conn->query("DELETE FROM tabel_admin WHERE id_admin = '$id_admin'");

    return $conn->affected_rows;
    }

    // Hapus
    function hapusfm($id_form) {
        $conn = koneksi();
    
        $conn->query("DELETE FROM data_form WHERE id_form = '$id_form'");
    
        return $conn->affected_rows;
        }

    function register($data2) {

    $conn = koneksi();

    $nama_admin = htmlspecialchars($data2['nama_admin']);
    $password = $conn->real_escape_string($data2['password']);
    $password2 = $conn->real_escape_string($data2['password2']);

    // Jika Username / Password kosong
    if(empty($nama_admin) || empty($password) || empty($password2)) {
        echo "<script>
            alert('Username / Password tidak boleh kosong')
        </script>";
        return false;
    }

    // Jika username sudah ada
    if(query("SELECT * FROM tabel_admin WHERE nama_admin = '$nama_admin'")) {
        echo "<script>
            alert('Username sudah terdaftar')
        </script>";
        return false;
    }

    // Jika konfirmasi password tidak sesuai
    if($password !== $password2) {
        echo "<script>
            alert('Konfirmasi password tidak sama')
        </script>";
        return false;
    }

    // Jika password kurang dari 5 digit
    if(strlen($password) < 5) {
        echo "<script>
            alert('Password terlalu pendek')
        </script>";
        return false;
    }

    // Jika Username dan Password sudah sesuai

    // Enkripsi Password
    $password_baru = password_hash($password, PASSWORD_DEFAULT);

    $conn->query("INSERT into tabel_admin(nama_admin, password) VALUES('$nama_admin', '$password_baru')");

    return $conn->affected_rows;
  }

  // Login
  function login($data2) {
    
    session_start();
    $nama_admin = htmlspecialchars($data2['nama_admin']);
    $password = htmlspecialchars($data2['password']);
    
    // Cek Username
    $user = query("SELECT * FROM tabel_admin WHERE nama_admin = '$nama_admin'");

    if($user) {
        // Cek Password
        if(password_verify($password, $user['password'])) {
            // Set Session
            $_SESSION['login'] = TRUE;
            header('location:../index.php?page=wisata');
            exit;
        } else {
            echo "<script>
            alert('Password Salah');
            </script>";
        }
    } else {
        echo "<script>
            alert('Username tidak terdaftar');
        </script>";
    }   
  }

?>