<?php
session_start();

$referer = $_SERVER['HTTP_REFERER'] ?? '../index.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: $referer");
    exit;
}

if ($_SESSION['user'])
    unset($_SESSION['user']);

header("Location: $referer");
exit;
?>