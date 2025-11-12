<?php
session_start();

if (isset($_SESSION["user"])) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["table_id"])) {
            if (!isset($_SESSION["table"]))
                init_table();

            foreach ($dish as $id => $data) {
                $quantity = $_POST["quantity_".$id];
                $_SESSION["table"]["table_id"]["order"][$id] = $quantity == 0 ? null : $quantity;
            }

            $_SESSION["table"]["table_id"]["notes"] = $_POST["notes"];
        }
    }
}

header("Location: ".$_SERVER["HTTP_REFERER"]);
exit;  
?>