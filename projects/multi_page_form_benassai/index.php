<?php
session_start();

include_once './php/form_methods.php';
include_once './php/db.php';

$html_form;
if (!isset($_SESSION['current_user'])) {
    $html_form = generate_login();
}
else {
    if (!isset($_SESSION['current_question']))
        $_SESSION['current_question'] = 0;

    $current_question = $_SESSION['current_question'];
    $html_form = generate_question($current_question, $questions[$current_question]);
}

// TODO: add previous

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
    <?php
    if (isset($_SESSION['current_user']) && isset($_SESSION['users'][$_SESSION['current_user']][$current_question])) {
        $id_answer = $_SESSION['users'][$_SESSION['current_user']][$current_question];
        echo '<p>Your previous answer: '.$questions[$current_question]['options'][$id_answer]['prompt'].'</p>';
    }
    ?>
</body>
</html>