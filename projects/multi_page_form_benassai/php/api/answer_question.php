<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_question']) && isset($_POST['option'])) {
        $id_question = $_POST['id_question'];

        //TODO: finish this POST api + add answers to session
    }
}

header('Location: '.$_SERVER['HTTP_REFERER']);
exit;
?>