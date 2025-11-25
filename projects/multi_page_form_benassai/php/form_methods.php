<?php

function generate_question($id, $question) {
    $result = '<div>
        <p>'.$question['prompt'].'</p>
        <form method="POST" action="php/api/answer_question.php">
            <input type="hidden" name="id_question" value="'.$id.'">';
    
    foreach ($question["options"] as $id_option => $option) {
        $result .= '<div>
            <button type="submit" name="option" value="'.$id_option.'">
                '.$option["prompt"].'
            </button>
        </div>';
    }

    $result .= '</form>
    </div>';

    return $result;
}

function generate_login() {
    $result = '<div>
        <p>Type your username</p>
        <form method="POST" action="php/api/answer_login.php">
            <input name="user" type="text">
            <button type="submit">Submit</button>
        </form>';

    return $result;
}

?>