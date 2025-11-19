<?php
session_start();

include_once '../php/methods/session_methods.php';

init_session();

if (!isset($_GET['user_id'])) {
    header('Location: ../index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['user_id']) && isset($_POST['count'])) {
        for ($i = 1; $i <= $_POST['count']; $i++) {
            $tmp = [];

            $tmp['type'] = $_POST['type_'.$i];
            $tmp['contact'] = $_POST['contact_'.$i];

            $_SESSION['user'][$_POST['user_id']]['contacts'][] = $tmp;
        }

        header('Location: ../index.php');
    }
}

$user_id = $_GET['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>
<body>
    <div>
        <button onclick="new_contact()">New contact entry</button>
    </div>
    <form id="contact_form" method="POST" action="./add_contacts.php">
        <div>
            <input name="user_id" type="hidden" value="<?= $user_id ?>">
            <input id="contact_form_count" name="count" type="hidden" value="1">
            <button type="submit">Submit</button>
        </div>
        <div>
            <label>Type</label>
            <input name="type_1" type="text">
            <label>Contact</label>
            <input name="contact_1" type="text">
        </div>
    </form>

    <script>
        function new_contact() {
            form = document.querySelector('#contact_form')

            inputs = form.childElementCount;
            document.querySelector('#contact_form').innerHTML += 
                `<div>
                    <label">Type</label>
                    <input name="type_${inputs}" type="text">
                    <label">Contact</label>
                    <input name="contact_${inputs}" type="text">
                </div>`;
            
            document.querySelector('#contact_form_count').value = inputs;
        }
    </script>
</body>
</html>