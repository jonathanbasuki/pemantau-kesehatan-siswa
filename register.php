<?php

include("config.php");

if (isset($_POST['register'])) {
    $nama_lengkap = filter_input(INPUT_POST, 'nama_lengkap', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $jurusan = filter_input(INPUT_POST, 'jurusan', FILTER_SANITIZE_STRING);
    $kelas = filter_input(INPUT_POST, 'kelas', FILTER_SANITIZE_STRING);
    $jenis_kelamin = filter_input(INPUT_POST, 'jenis_kelamin', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nama_lengkap, username, jurusan, kelas, jenis_kelamin, password) VALUES (:nama_lengkap, :username, :jurusan, :kelas, :jenis_kelamin, :password)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":username" => $username,
        ":password" => $password,
        ":nama_lengkap" => $nama_lengkap,
        ":jurusan" => $jurusan,
        ":kelas" => $kelas,
        ":jenis_kelamin" => $jenis_kelamin
    );

    $saved = $stmt->execute($params);

    if ($saved) header("Location: index.php");
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

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Pemantau Kesehatan Siswa Berbasis Web | Register - Student</title>
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-success text-center text-white">
                        <h3>Pemantau Kesehatan Siswa Berbasis Web</h3>
                        <p>SMK Negeri 17 Jakarta</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" class="form-control" required>
                            </div>
                            <div class="form-group my-2">
                                <label for="username">Username</label>
                                <input type="username" name="username" id="username" placeholder="Masukkan Username Anda" class="form-control   " required>
                            </div>
                            <div class="form-group">
                                <label for="password">Atur Password</label>
                                <input type="password" name="password" id="password" placeholder="Atur Password Anda" class="form-control   " required>
                            </div>
                            <div class="form-group my-2">
                                <label for="jurusan">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control" required>
                                    <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                                    <option value="Bisnis Daring dan Pemasaran">Bisnis Daring dan Pemasaran</option>
                                    <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
                                    <option value="Seni">Seni</option>
                                    <option value="Usaha Perjalanan Wisata">Usaha Perjalanan Wisata</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select name="kelas" id="kelas" class="form-control" required>
                                    <option value="10">X</option>
                                    <option value="11">XI</option>
                                    <option value="12">XII</option>
                                </select>
                            </div>
                            <div class="form-group my-2">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <p>Sudah punya akun? <a href="index.php">Masuk</a></p>
                            <button type="submit" class="btn btn-primary" name="register">Daftar</button>
                            <button type="reset" class="btn btn-warning">Ulangi</button>
                        </form>
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