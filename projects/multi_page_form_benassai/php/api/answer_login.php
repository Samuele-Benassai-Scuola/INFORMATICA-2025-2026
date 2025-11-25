<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['user'])) {
        $_SESSION['user'] = $_POST['user'];
    }
}

header('Location: '.$_SERVER['HTTP_REFERER']);
exit;
?>