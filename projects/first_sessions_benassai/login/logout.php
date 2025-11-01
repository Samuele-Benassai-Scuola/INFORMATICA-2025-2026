<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: ./login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_reset();

    header("Location: ./login.php");
    exit;
}

?>