<?php
require 'koneksi.php';

if (isset($_POST["submit"])) {


    //cekapakah data berhasil di input
    if (register($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan !');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan !');
            document.location.href = 'index.php';
            </script>
    ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- costum css -->
    <link rel="stylesheet" href="Assets/CSS/style.css">
</head>

<body>
    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container">
                    <h4 class="text-center font-weight-bold"> ppb </h4>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Tempat tanggal lahir</label>
                        <input type="tempat" class="form-control" id="tanggal" placeholder="Tempat tanggal lahir">
                    </div>
                    <div class="form-group">
                        <label for="name">Warga Negara</label>
                        <input type="text" class="form-control" id="warga" placeholder="warga negara">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input type="text" class="form-control" id="inputemail" aria-describeby="emailHelp" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Homor hp</label>
                        <input type="text" class="form-control" id="nomor hp" placeholder="nomor hp">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Asal SMP</label>
                        <input type="text" class="form-control" id="asalsmp" placeholder="asal smp">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Nama ayah</label>
                        <input type="text" class="form-control" id="namaayah" placeholder="nama ayah">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Nama ibu</label>
                        <input type="text" class="form-control" id="namaibu" placeholder="nama ibu">
                    </div>
                    <div class="form-group">
                        <label for="alamat">penghasilan orang tua</label>
                        <input type="text" class="form-control" id="penghasilan" placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label for="alamat">masulan foto</label>
                        <input type="text" class="form-control" id="foto" placeholder="masukan foto">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <div class="form-footer mt-2">
                        <p> Sudah punya mendaftar <a href="#">Login</a></p>
                    </div>
                </form>
            </section>
        </section>
    </section>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, danyang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>