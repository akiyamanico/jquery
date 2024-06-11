<?php

include './conn.php';

$id = $_GET['id'];

$hapus = $conn->query("DELETE FROM user WHERE id = '$id'");

echo json_encode(['data' => $hapus]);
