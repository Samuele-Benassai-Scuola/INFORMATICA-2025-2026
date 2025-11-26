<?php
session_start();

include_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['current_user'])) {
        if (isset($_POST['id_question']) && isset($_POST['option'])) {
            $id_question = intval($_POST['id_question']);
            $option = intval($_POST['option']);

            $_SESSION['users'][$_SESSION['current_user']][$id_question] = $option;

            $_SESSION['current_question'] = $id_question + 1;
            if (!isset($questions[$_SESSION['current_question']])) {
                unset($_SESSION['current_user']);
                unset($_SESSION['current_question']);
            }
        }
    }
}

header('Location: '.$_SERVER['HTTP_REFERER']);
exit;
?>