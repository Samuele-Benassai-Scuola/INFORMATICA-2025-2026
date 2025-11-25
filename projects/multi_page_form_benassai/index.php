<?php
session_start();

include_once './php/form_methods.php';
include_once './php/db.php';

$html_form;
if (!isset($_SESSION['user'])) {
    $html_form = generate_login();
}
else {
    if (!isset($_SESSION['current_question']))
        $_SESSION['current_question'] = 0;

    $current_question = $_SESSION['current_question'];
    $html_form = generate_question($current_question, $questions[$current_question]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="./">
    <title>Document</title>
</head>
<body>
    <div>
        <?= $html_form ?>
    </div>
</body>
</html>