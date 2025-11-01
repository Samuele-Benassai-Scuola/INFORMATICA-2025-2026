<?php
session_start();

include './php/data.php';

if (!isset($_SESSION["cart"]))
    $_SESSION["cart"] = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"]) && isset($_POST["product_id"])) {
        $product_id = intval($_POST["product_id"]);
        $action = $_POST["action"];

        switch ($action) {
            case "ADD":
                if (!isset($_SESSION["cart"][$product_id]))
                    $_SESSION["cart"][$product_id] = 0;
                $_SESSION["cart"][$product_id] += 1;
                break;
            case "REMOVE":
                    if (!isset($_SESSION["cart"][$product_id]) || $_SESSION["cart"][$product_id] < 1)
                        break;
                    $_SESSION["cart"][$product_id] -= 1;
                    if ($_SESSION["cart"][$product_id] < 1)
                        unset($_SESSION["cart"][$product_id]);
                break;
        }
    }

    header('Location: '.$_SERVER["PHP_SELF"]);
    exit;
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
    <h1 class="text-center mt-3">
        Prodotti
    </h1>

    <?php
        var_dump($_SESSION["cart"]);
    ?>

    <div class="container row mx-auto mt-3">
        <?php
            foreach ($products as $product) {
                $amount_in_cart = $_SESSION["cart"][$product["id"]] ?? 0;

                echo '<div class="contianer col-4 mx-auto mt-2 text-center card">
                        <div class="card-body">
                            <h5 class="card-title">'.$product["name"].'</h5>
                            <form method="POST" action="./prodotti.php">
                                <input type="hidden" name="action" value="ADD">
                                <input type="hidden" name="product_id" value="'.$product["id"].'">
                                <button type="submit" class="btn btn-primary">Add 1 to cart</button>
                            </form>';
                if ($amount_in_cart > 0) {
                    echo '<form method="POST" action="./prodotti.php">
                                <input type="hidden" name="action" value="REMOVE">
                                <input type="hidden" name="product_id" value="'.$product["id"].'">
                                <button type="submit" class="btn btn-primary">Remove 1 from cart</button>
                            </form>';
                }
                echo '</div>
                    </div>';
            }
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>