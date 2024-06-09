<?php

$con = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040147");

function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $con;
    $tipe = htmlspecialchars($data["tipe"]);
    $nama = htmlspecialchars($data["judul"]);
    $harga = htmlspecialchars($data["harga"]);

    // Upload Gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO shoes 
                VALUES
                ('0', '$gambar', '$tipe', '$nama', '$harga')
    ";

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);

}

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    $error = $_FILES['gambar']['error'];

    // Cek Error

    if ($error === 4){
        echo "
        <script>
            alert('Silahkan pilih gambar terlebih dahulu!')
        </script>";
        return false;
    }

    // Cek apakah diupload adalah gambar

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "
        <script>
            alert('yang anda upload bukan gambar!')
        </script>";
        return false;
    }

    // Cek jika ukurannya terlalu besar

    if($ukuranFile > 1000000){
        echo "
        <script>
            alert('ukuran gambar terlalu besar!')
        </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload

    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);
    

    return $namaFileBaru;
}


function hapus($id){
    global $con;
    mysqli_query($con, "DELETE FROM shoes WHERE id = $id");
    return mysqli_affected_rows($con);
}


function ubah($data){
    global $con;
    $id = $data["id"];
    $tipe = htmlspecialchars($data["tipe"]);
    $nama = htmlspecialchars($data["judul"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // Cek apakah user pilih gambar baru atau tidak
    if ( $_FILES['gambar']['error']  === 4 ){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE shoes SET
                gambar = '$gambar',
                tipe = '$tipe',
                judul = '$nama',
                harga = '$harga'
              WHERE id = $id      
    ";

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}


function cari($keyword){
    $query = "SELECT * FROM shoes
                WHERE
              judul LIKE '%$keyword%'  
    ";
    return query($query);
}




?>