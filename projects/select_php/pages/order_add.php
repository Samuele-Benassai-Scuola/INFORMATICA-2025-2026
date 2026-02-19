<?php
session_start();

require_once('../connection.php');
require_once('../sqlmodule.php');

$customers = sql_query(
    $conn,
    'SELECT * FROM customers ORDER BY customerName;'
)->get_result();

$products = sql_query(
    $conn,
    'SELECT * FROM products ORDER BY productName;'
)->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Order</title>
</head>
<body>
    <div>
        <form action="../index.php" method="GET">
            <button type="submit"><-</button>
        </form>
    </div>

    <h1>Add New Order</h1>

    <form method="POST" action="../api/add_order.php">
        <label for="customerName">Customer Name:</label>
        <select name="customerName" required>
            <option value="">Select Customer</option>
            <?php foreach ($customers as $customer): ?>
                <option value="<?= $customer['customerName'] ?>"><?= $customer['customerName'] ?></option>
            <?php endforeach; ?>
        </select>

        <br><br>
        
        <label for="orderDate">Order Date:</label>
        <input type="date" name="orderDate" required>
        
        <br><br>

        <h2>Order Details</h2>

        <div id="orderDetails">
            <div class="orderRow">
                <label for="productName[]">Product Name:</label>
                <select name="productName[]" required>
                    <option value="">Select Product</option>
                    <?php foreach ($products as $product): ?>
                        <option value="<?= $product['productName'] ?>"><?= $product['productName'] ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="quantity[]">Quantity:</label>
                <input type="number" name="quantity[]" min="1" required>

                <label for="priceEach[]">Price Each:</label>
                <input type="number" name="priceEach[]" step="0.01" required>

                <br><br>
            </div>
        </div>

        <button type="button" id="addProduct">Add Another Product</button>
        <br><br>

        <button type="submit">Submit Order</button>
    </form>

    <script>
        document.getElementById("addProduct").addEventListener("click", function() {
            var orderDetailsDiv = document.getElementById("orderDetails");
            var newRow = document.createElement("div");
            newRow.classList.add("orderRow");
            newRow.innerHTML = `
                <label for="productName[]">Product Name:</label>
                <select name="productName[]" required>
                    <option value="">Select Product</option>
                    <?php foreach ($products as $product): ?>
                        <option value="<?= $product['productName'] ?>"><?= $product['productName'] ?></option>
                    <?php endforeach; ?>
                </select>

                <label for="quantity[]">Quantity:</label>
                <input type="number" name="quantity[]" min="1" required>

                <label for="priceEach[]">Price Each:</label>
                <input type="number" name="priceEach[]" step="0.01" required>

                <br><br>
            `;
            orderDetailsDiv.appendChild(newRow);
        });
    </script>
</body>
</html>
