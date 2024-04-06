<?php

include 'koneksi.php';    

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$domisili = $_POST['domisili'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];

$query = "INSERT INTO mahasiswa (nama, nim, domisili, jurusan, semester)
            VALUES ('$nama', '$nim', '$dpmisili', '$jurusan', '$semester')";

if( $conn->query($query) === TRUE ) {
    header("Location: index.php");
}


$conn->close();