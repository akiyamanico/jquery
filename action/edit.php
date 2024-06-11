<?php

include './conn.php';

$id = $_GET['id'];

$edit = $conn->query("SELECT * FROM user WHERE id = '$id'")->fetch_assoc();

echo json_encode(['data' => $edit]);
