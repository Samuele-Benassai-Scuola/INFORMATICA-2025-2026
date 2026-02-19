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

// Basic validation - redirect back with error code if empty
if (empty($username) || empty($password)) {
    header("Location: $referer?error=missing_fields");
    exit;
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);
$uuid = generate_uuid();

try {
    $stmt = sql_query(
        $conn,
        'INSERT INTO users (uuid, username, passwordHash) VALUES (?, ?, ?);',
        'sss',
        [$uuid, $username, $password_hash]
    );

    //session_regenerate_id(true);
    //$_SESSION['user'] = $uuid;
    
    header("Location: $referer?status=registered");
    exit;

} catch (mysqli_sql_exception $e) {
    // spero che l'uuidv4 non abbia collisioni
    $errorCode = ($e->getCode() == 1062) ? 'user_exists' : 'db_error';
    header("Location: $referer?error=$errorCode");
    exit;
}