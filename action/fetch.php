<?php

include './conn.php';


$data = $conn->query("SELECT * FROM user");

$list = array();
foreach ($data as $i => $d){
    $list[] = array(
        'id'=>$d['id'],
        'nama'=>$d['nama'],
        'email'=>$d['email'],
        'alamat'=>$d['alamat'],
    );
}

echo json_encode(['data' => $list]);
