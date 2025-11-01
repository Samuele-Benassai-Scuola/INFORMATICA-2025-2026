<?php
session_start();


function reset_counter() {
    /*if (isset($_SESSION["visit_count"]))
         unset($_SESSION["visit_count"]);
    if (isset($_SESSION["last_visit"]))
        unset($_SESSION["last_visit"]);*/

    session_unset();

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

function increase_counter() {
    if (!isset($_SESSION["visit_count"]))
        $_SESSION["visit_count"] = 0;

    $_SESSION["visit_count"] += 1;

    $_SESSION["last_visit"] = time();
}



if ($_SERVER["REQUEST_METHOD"] === "POST")
    reset_counter();

increase_counter();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visite</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-3">
        Visite
    </h1>

    <p class="text-center mt-3">
        <?php echo "Hai visitato questo sito " . $_SESSION["visit_count"] . " volte." ?>
    </p>
    <p class="text-center mt-3">
        <?php echo "Ultima visita: " . date("d-m-Y H:i:s\Z", $_SESSION["last_visit"]) ?>
    </p>

    <div class="text-center mx-auto">
        <form method="POST" action="./visite.php">
            <button type="submit" class="btn btn-primary">Azzera contatore</button>
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>