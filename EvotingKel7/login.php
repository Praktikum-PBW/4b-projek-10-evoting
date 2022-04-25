<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <!-- Bosstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body{
            background-image:url();
        }
        .login {
            /* ukuran jadi  full page */
            height: 100vh;
        }

        .form-control{
            border-radius: 60px;
        }

        .btn{
            border-radius: 60px;
            width: 90px;
        }

        </style>
</head>

<body>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- aktif session -->
    <?php
    session_start();
    ?>


    <section class="login d-flex text-danger">
    <!-- LEFT - Halaman Gambar -->
        <div class="Login-left bg-danger w-50 h-100">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                    
                        <img src="./back/assets/img/LOGO.png" class="d-block h-100" posisition="center" alt="...">
                        
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>

                    </div>
                        <div class="carousel-item">

                        <img src="./back/assets/img/UNSIKA.png" class="d-block h-100" alt="...">
                        
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    <!-- RIGHT - Halaman Login -->
        <div class="login-right w-50 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-6">

                <!-- HEADER -->
                    <div class="header mb-5 text-center font-weight-bold">
                        <h1 class="fw-bold"> Selamat Datang</h1>
                        <p class="text-secondary"> Masukan Detail akun, untuk mengakses E-Voting</p>
                    </div>
                
                <!-- BODY -->
                    <div class="login-form y-20">
                        <!-- Header Form
                            <div class="card-header bg-dark text-light text-center">
                                <h3 class="card-title ">Login</h3>
                            </div> -->

                        <!-- FORM -->
                            <form action="login-process.php" method="POST" class="needs-validation" novalidate>

                            <!-- 1. NPM -->
                                <div class="form-group mb-3 ">
                                    <label for="id_usr" class="form-label">NPM</label>
                                    <input type="number" class="form-control" name="id_usr" id="id_usr" placeholder="Masukan 13 digit NPM" required>
                                
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please choose a username.</div>
                                </div>

                            <!-- 2. PASSWORD -->
                            
                                <div class="form-group mb-3">
                                    <label for="pass" class="form-label">Password</label>
                                    <input type="password" class="form-control border-danger" name="pass" id="pass" placeholder="Masukan Password" required>
                                </div>

                            <!-- BUTTON LOGIN -->
                                <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-outline-danger mb-5" name="login" onclick="checkform()">Login</button>

                                    <!-- <script>
                                        function checkForm(){

                                            // menampung data
                                            var id_usr = document.getElementById("id_usr").value;
                                            var pass = document.getElementById("pass").value;

                                            // Check value inputan pada form login terisi
                                            if(id_usr =="" || pass ==""){
                                                alert("form tidak boleh kosong");
                                            } else{
                                                alert("Berhasil login");
                                            }
                                        }
                                    </script> -->
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>