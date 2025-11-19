<?php

function init_session() {
    if (!isset($_SESSION["user"]))
        $_SESSION["user"] = [];
    if (!isset($_SESSION["created_user"]))
        $_SESSION["created_user"] = null;
}


?>