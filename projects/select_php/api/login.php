<?php
session_start();

require_once('../connection.php');
require_once('../sqlmodule.php');

$referer = $_SERVER['HTTP_REFERER'] ?? '../index.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: $referer");
    exit;
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = sql_query(
    $conn,
    'SELECT uuid, passwordHash FROM users WHERE username = ?',
    's',
    [$username]
);
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    if (password_verify($password, $user['passwordHash'])) {
        
        session_regenerate_id(true);
        $_SESSION["user"] = $user['uuid'];
        
        header("Location: $referer?login=success");
        exit;
    }
}

header("Location: $referer?error=invalid_credentials");
exit;