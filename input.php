<?php

include("auth.php");
include("config.php");

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

    <title>Pemantau Kesehatan Siswa Berbasis Web | Input Data - <?= $_SESSION['user']['nama_lengkap'] ?></title>
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
                                    <a class="nav-link text-success" href="profile.php">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-success active" aria-current="true" href="input.php">Input</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Grafik
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item text-success" href="grafik-siswa.php">Siswa</a></li>
                                        <li><a class="dropdown-item text-success" href="grafik-kelas.php">Kelas</a></li>
                                    </ul>
                                </li>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-danger">
                                    <a href="logout.php" class="text-light">Keluar <i class="fas fa-sign-out-alt"></i></a>
                                </button>
                            </div>
                        </ul>
                        
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