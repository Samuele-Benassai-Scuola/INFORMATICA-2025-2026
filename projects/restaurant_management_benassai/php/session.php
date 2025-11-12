<?php
include 'db.php';

function init_table() {
    global $table;

    if (isset($_SESSION["table"]))
        return;

    foreach ($table as $key => $value) {
        $_SESSION["table"][$key] = [];

        $_SESSION["table"][$key]["served"] = null;
        $_SESSION["table"][$key]["order"] = [];
        $_SESSION["table"][$key]["notes"] = "";
    }
}

?>