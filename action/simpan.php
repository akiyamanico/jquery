<?php

include "./conn.php";


$nama = $_POST["nama"];
$email = $_POST["email"];
$alamat = $_POST["alamat"];

$simpan = $conn->query("INSERT INTO user (nama, email,alamat) VALUES ('$nama', '$email', '$alamat')");

if($simpan){
    echo json_encode(['pesan' => 'data berhasil disimpan', 'status' => 200]);
}else{
    echo json_encode(['pesan' => 'data gagal disimpan', 'status' => 404]);
}