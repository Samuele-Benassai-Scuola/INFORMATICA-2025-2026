<?php
session_start();

include_once './php/methods/session_methods.php';

init_session();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <form method="GET" action="./pages/new_user.php">
        <button type="submit">Add new user</button>
    </form>

    <h2>
        Users
    </h2>

    <ul>
        <?php foreach ($_SESSION["user"] as $user): ?>
            <li>
                <?= $user["name"]." ".$user["surname"]." | ".$user["birth_date"]." | ".$user["address"] ?>
                <?php foreach ($user["contacts"] as $contact): ?>
                    <?= " | ".$contact ?>
                <?php endforeach ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>