<?php
header('Content-Type: application/json; charset=utf-8');

$username = $_POST['username'] ?? $_GET['username'] ?? '';
$password = $_POST['password'] ?? $_GET['password'] ?? '';

$correctUsername = 'admin';
$correctPassword = '123';

if ($username === $correctUsername && $password === $correctPassword) {
    echo json_encode(["RESULT" => "1"]);
} else {
    echo json_encode(["RESULT" => "0"]);
}

exit; // ⭐ RẤT QUAN TRỌNG
