<?php
session_start();

include_once './php/db.php';
include_once './php/session.php';

if (!isset($_SESSION["user"])) {
    header("Location: ./pages/login.php");
    exit;
}

if (!isset($_SESSION["table"])) {
    init_table();
}

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
    <div class="w-25 text-center">
        <span>
            User: 
            <?php echo $_SESSION["user"]; ?>
        </span>
        <form method="POST" action="./api/logout.php">
            <button type="submit" class="btn btn-primary">Logout</button>
        </form>
    </div>
    

    <h1 class="text-center mt-3">
        Tavoli
    </h1>

    <div class="container row mx-auto mt-3">
        <?php
            foreach ($table as $id => $x) {
                if ($_SESSION["table"][$id]["served"] !== $_SESSION["user"])
                    continue;

                echo '<div class="contianer col-4 mx-auto mt-2 text-center card">
                        <div class="card-body">
                            <h5 class="card-title">'.$x["name"].'</h5>
                            <form method="GET" action="./pages/table_manager.php">
                                <input type="hidden" name="table_id" value="'.$id.'">
                                <button type="submit" class="btn btn-primary">Manage table</button>
                            </form>
                        </div>
                    </div>';
            }
        ?>
    </div>

    <h1 class="text-center mt-3">
        Tavoli non assegnati
    </h1>

    <div class="container row mx-auto mt-3">
        <?php
            foreach ($table as $id => $x) {
                if ($_SESSION["table"][$id]["served"] !== null)
                    continue;

                echo '<div class="contianer col-4 mx-auto mt-2 text-center card">
                        <div class="card-body">
                            <h5 class="card-title">'.$x["name"].'</h5>
                            <form method="POST" action="./api/link_table.php">
                                <input type="hidden" name="table_id" value="'.$id.'">
                                <button type="submit" class="btn btn-primary">Obtain table</button>
                            </form>
                        </div>
                    </div>';
            }
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>