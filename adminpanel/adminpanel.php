<?php

require "../inc/function.php";

$shoes = query("SELECT * FROM shoes");

if(isset($_POST["cari"])){
    $shoes = cari($_POST["keyword"]);
}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/admin.css?=<?= time() ?>">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data user</title>
</head>

<body>

    <nav class="nav-head navbar navbar-expand-lg">

        <div class="container d-flex justify-content-beetwen align-items center w-100">

            <a class="navbar-brand" href="#">SPORTIFY</a>

            <form class="d-flex" action="" role="search" method="post">
                <input class="form-control  me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" name="cari" type="submit">Search</button>
            </form>

        </div>

    </nav>

    <div class="container">
        <hr>
    </div>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <h2>Halaman Admin</h2>

                    <br />
                    <br />
                    <div class="card-header">
                        DATA USER
                    </div>
                    <div class="card-body">
                        <a href="tambah.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Tipe</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($shoes as $sh) : ?>
                                <tr class="text-center">
                                    <td><img src="../assets/img/<?= $sh["gambar"]; ?>" alt="" width="80px" height="80px"></td>
                                    <td><?= $sh["tipe"]; ?></td>
                                    <td><?= $sh["judul"]; ?></td>
                                    <td><?= $sh["harga"]; ?></td>
                                    <td class="text-center">
                                        <a href="edit.php?id=<?= $sh["id"] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                        <a href="hapus.php?id=<?= $sh["id"]; ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                    </td>
                                <?php endforeach; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="profile.php">Profile Admin</a>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</body>

</html>