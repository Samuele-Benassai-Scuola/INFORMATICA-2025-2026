<?php
session_start();

include_once './php/cart.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['cart']) && sizeof($_SESSION['cart']) > 0) {
        session_unset();
    }
    else {
        header('Location: '.$_SERVER['PHP_SELF']);
        exit;
    }
}

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-3">
        Checkout
    </h1>

    <div class="container text-center mx-auto">
        <?php
            show_cart();
        ?>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
            echo '<p class="text-center">Grazie per l\'acquisto</p>';

        if (sizeof($_SESSION["cart"]) > 0)
            echo '<form method="POST" action="./checkout.php" class="mx-auto">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </form>';
    ?>

    <p>
        Torna ai prodotti: <a href="./prodotti.php">prodotti</a>
    </p>
    <p>
        Vedi il carrello: <a href="./carrello.php">carrello</a>
    </p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>