<?php
session_start();

if (isset($_SESSION["user"])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["table_id"])) {
            if (!isset($_SESSION["table"]))
                init_table();

            $_SESSION["table"][$_POST["table_id"]]["served"] = $_SESSION["user"];
        }
    }
}

header("Location: ".$_SERVER["HTTP_REFERER"]);
exit;
?>