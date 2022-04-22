<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Polling</title>
</head>
<body>
<?php
        if (isset($_POST['submit'])){
            $id=$_POST['id'];
            mysqli_query($koneksi,"UPDATE polling SET value=value+1 WHERE id=$id");
            header('location:index.php');
        }
?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Vote Pemilihan Cakor TI'B 2022</h2>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p class="lead">Silahkan Pilih Calon Koordinator Terbaik Versimu!</p>
                        <hr>
                        <form action="" method="post">
                            <div>
                                <div class="form-group">
                                    <input type="radio" name="id" aria-valuenow="" class="pollradio" value="">
                                    CAKOR 1 : Assyifa Khalif
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="id" aria-valuenow="" class="pollradio" value="">
                                    CAKOR 2 : Annisa Rahma Putri
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="id" aria-valuenow="" class="pollradio" value="">
                                    CAKOR 3 : Irna Purnahasanah
                                </div>
                            </div>
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary" id="btn">submit</button>
                        </form>
                    </div>

                    <div class="col-6">
                        <p class="lead">Live Polling Pemilihan Koordinator TI'B 2022</p>
                        <hr>
                        <div class="row">
                            <div class="col-2">
                                <div class="mb-3">CAKOR 1</div>
                                <div class="mb-3">CAKOR 2</div>
                                <div class="mb-3">CAKOR 3</div>
                            </div>
                            <div class="col-10">
                                <div class="progress mt-1 mb-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 20" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25% uncompleted</div>
                                </div>
                                <div class="progress mt-1 mb-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 20" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25% uncompleted</div>
                                </div>
                                <div class="progress mt-1 mb-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 20" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25% uncompleted</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>