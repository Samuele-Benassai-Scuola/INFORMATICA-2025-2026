<?php

include_once __DIR__.'/data.php';

function show_cart() {
    if (!isset($_SESSION["cart"]))
        return;

    $cart = $_SESSION["cart"];

    if (sizeof($cart) === 0) {
        echo '<p>Il carrello è vuoto</p>';
    }
    else {
        $total_price = 0;

        echo '<ul class="list-unstyled">';
        foreach ($cart as $product_id => $quantity) {
            $product = find_product($product_id);
            $total_price += $product["price"] * $quantity;

            echo '<li>'.$quantity.'x | '.$product["name"].' | '.$product["price"].'€</li>';
        }
        echo '</ul>';

        echo '<p>Total: '. $total_price .'€</p>';
    }
}

?>