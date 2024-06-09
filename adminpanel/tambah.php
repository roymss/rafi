<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah user</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH DATA
                    </div>
                    <div class="card-body">
                        <form action="simpan.php" method="POST" enctype="multipart/form-data">

                            <div class="input-group mb-3">
                                <label class="input-group-text">Upload</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tipe Barang</label>
                                <input type="text" name="tipe" placeholder="Masukkan Tipe" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" name="judul" placeholder="Masukkan Nama" required></input>
                            </div>

                            <div class="form-group">
                                <label>Harga Barang</label>
                                <input type="text" name="harga" placeholder="Masukkan Harga" class="form-control" required>
                            </div>

                            <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>