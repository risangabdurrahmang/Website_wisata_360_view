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

    if(isset($_POST['proses']))
    {
        $nama = $_POST['Nama'];
        $email = $_POST['Email'];
        $subject = $_POST['Subject'];
        $message = $_POST['Message'];
        mysqli_query($conn, "INSERT INTO data_form (Nama, Email, Subjek, Pesan) VALUES ('$nama', '$email', '$subject', '$message')") or die (mysqli_error($conn));

        echo "<script>
                alert('Berhasil Disimpan');
             </script>";
    }
?>