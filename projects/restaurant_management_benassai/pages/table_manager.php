<?php
session_start();

include_once '../php/db.php';
include_once '../php/session.php';

if (!isset($_SESSION["user"])) {
    header("Location: ../pages/login.php");
    exit;
}

if (!isset($_SESSION["table"])) {
    init_table();
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!isset($_GET["table_id"])) {
        header("Location: ../index.php");
        exit;
    }
}

var_dump($_SESSION["table"]);

$table_id = $_GET["table_id"];

$table_current = $table[$table_id];
$table_current_session = $_SESSION["table"][$table_id];

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-3">
        Tavolo: <?php echo $table_current["name"]; ?>
    </h1>

    <h2 class="text-center mt-3">
        Piatti:
    </h2>

    <div class="container row mx-auto mt-3">
        <ul class="list-unstyled">
            <?php
                foreach ($table_current_session["order"] as $dish_id => $dish_quantity) {
                    echo '<li>'.$dish_quantity.'x '.$dish[$dish_id]["name"].'</li>';
                }
            ?>
        </ul>
    </div>

    <h2 class="text-center mt-3">
        Note:
    </h2>

    <p>
        <?php echo $table_current_session["notes"]; ?>
    </p>

    <h2 class="text-center mt-3">
        Modifica:
    </h2>


    <!-- 
        TODO:
        - add notes showing when set
        - actually set edited quantities
    -->
    <form method="POST" action="../api/edit_order.php" class="text-center">
        <input type="hidden" name="table_id" value="<?php echo $table_id ?>">

        <div class="container mx-auto mt-3">
            <h3>
                Piatti
            </h3>
            <ul class="list-unstyled">
                <?php
                    foreach ($dish as $id => $data) {
                        $amount_in_order = $table_current_session["order"][$id] ?? 0;

                        echo '<ul>
                                '.$data["name"].'
                                    <input type="number" min="0" name="quantity_'.$id.'" value="'.$amount_in_order.'">
                            </ul>';
                    }
                ?>
            </ul>
        </div>

        <div class="contianer mx-auto mt-3">
            <h3>
                Note
            </h3>
            <input type="textarea" name="notes" value="<?php echo $table_current_session["notes"] ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-1">Modifica</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>