<?php

include('./conn.php');

$id = $_GET['id'];
$nama  = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$update = $conn->query("UPDATE user SET nama='$nama', email='$email', alamat='$alamat' WHERE id='$id'");

if($update){
    echo json_encode(["pesan"=> "data sukses diupdate!","status"=> 200 ]);
}else {
    echo json_encode(["pesan"=> "error!","status"=> 400 ]);
}