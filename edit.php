<?php

include("auth.php");
include("config.php");

}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Pemantau Kesehatan Siswa Berbasis Web | Edit Information - Student</title>
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-success text-center text-white">
                        <h3>Pemantau Kesehatan Siswa Berbasis Web</h3>
                        <p><?= $_SESSION["user"]["nama_lengkap"]; ?></p>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs card-header-tabs justify-content-between">
                            <div class="navbar mb-2">
                                <li class="nav-item">
                                    <a class="nav-link text-success active" aria-current="true" href="#">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-success" href="#">Input</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Grafik
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item text-success" href="#">Siswa</a></li>
                                        <li><a class="dropdown-item text-success" href="#">Kelas</a></li>
                                    </ul>
                                </li>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-danger">
                                    <a href="logout.php" class="text-light">Keluar <i class="fas fa-sign-out-alt"></i></a>
                                </button>
                            </div>
                        </ul>
                        <div class="profile-tab">
                            <div class="d-flex justify-content-between">
                                <h4 class="mb-3">Edit Informasi User</h4>
                            </div>
                            <form action="" method="post">
                                <div class="form-group mb-2 row">
                                    <label for="nama_lengkap" class="col-sm-3">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="<?= $_SESSION["user"]["nama_lengkap"]; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group mb-2 row">
                                    <label for="jenis_kelamin" class="col-sm-3">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="<?= $_SESSION["user"]["jenis_kelamin"]; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group mb-2 row">
                                    <label for="username" class="col-sm-3">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="username" id="username" placeholder="<?= $_SESSION["user"]["username"]; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group mb-2 row">
                                    <label for="kelas" class="col-sm-3">Kelas</label>
                                    <div class="col-sm-9">
                                        <select name="kelas" id="kelas" class="form-control">
                                            <option <?= $_SESSION['user']['kelas'] ? "selected": "" ?>>X</option>
                                            <option <?= $_SESSION['user']['kelas'] ? "selected": "" ?>>XI</option>
                                            <option <?= $_SESSION['user']['kelas'] ? "selected": "" ?>>XII</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-2 row">
                                    <label for="jenis_kelamin" class="col-sm-3">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                            <option <?= $_SESSION['user']['jenis_kelamin'] ? "selected": "" ?>>Laki-laki</option>
                                            <option <?= $_SESSION['user']['kelas'] ? "selected": "" ?>>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
                                <button type="reset" class="btn btn-warning">Ulangi</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer bg-success text-center text-white">
                        &copy; 2021, Jonathan Basuki.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>