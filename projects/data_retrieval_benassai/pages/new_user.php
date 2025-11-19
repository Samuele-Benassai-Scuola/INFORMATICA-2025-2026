<?php
session_start();

include_once '../php/methods/session_methods.php';

init_session();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['birth'])) {
        $tmp = [];

        $tmp['name'] = $_POST['name'];
        $tmp['surname'] = $_POST['surname'];
        $tmp['birth'] = $_POST['birth'];

        $_SESSION['user'][] = $tmp;

        header('Location: ./add_contacts.php?user_id='.array_key_last($_SESSION['user']));
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <form method="POST" action="./new_user.php">
        <label for="name">Name</label>
        <input name="name" type="text">
        <label for="surname">Surname</label>
        <input name="surname" type="text">
        <label for="birth">Birth</label>
        <input name="birth" type="date">

        <button type="submit">Submit</button>
    </form>
</body>
</html>