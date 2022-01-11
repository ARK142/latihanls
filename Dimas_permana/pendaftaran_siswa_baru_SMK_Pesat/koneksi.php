<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dataswasta";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
//if (!$conn) {
//die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
function read($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function register($data)
{
    global $conn;

    $nama = ($data["nama"]);
    $tanggal = ($data["tanggal"]);
    $warga = ($data["warga"]);
    $alamat = ($data["alamat"]);
    $inputemail = ($data["inputemail"]);
    $nomorhp = ($data["nomorhp"]);
    $namaayah = ($data["namaayah"]);
    $namaibu = ($data["namaibu"]);
    $penghasilan = ($data["penghasilan"]);
    $foto = ($data["foto"]);

    $result = mysqli_query($conn, "SELECT nama FROM tbl_siswa WHERE nama = '$nama'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('nama sudah terdaftar!')
              </script>";
        return false;
    }

    $query = "INSERT INTO tbl_siswa
                VALUES
              ('', '$nama', '$tanggal', '$warga', '$alamat', '$inputemail', '$nomorhp', '$namaayah', '$namaibu', '$penghasilan', '$foto')
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_siswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $tanggal = htmlspecialchars($data["tangal"]);
    $warga = htmlspecialchars($data["warga"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $inputemail = htmlspecialchars($data["inputemail"]);
    $nomorhp = htmlspecialchars($data["nomorhp"]);
    $namaayah = htmlspecialchars($data["namaayah"]);
    $namaibu = htmlspecialchars($data["namaibu"]);
    $penghasilan = htmlspecialchars($data["penghasilan"]);
    $foto = htmlspecialchars($data["foto"]);


    $query = "UPDATE tbl_siswa SET
        nama = '$nama',
        tanggal = '$tanggal',
        warga = '$warga',
        email = '$alamat',
        email = '$inputemail',
        email = '$nomorhp',
        email = '$namaayah',
        email = '$namaibu',
        email = '$penghasilan',
        email = '$foto'
        WHERE id = $id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
