<?php
session_start();

$referer = $_SERVER['HTTP_REFERER'] ?? '../index.php';

/*if (!isset($_SESSION['user'])) {
    session_unset();
    session_destroy();
    header("Location: $referer?error=unauthorized");
    exit;
}*/

require_once('../connection.php');
require_once('../sqlmodule.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$customerName = $_POST['customerName'];
$orderDate = $_POST['orderDate'];
$productNames = $_POST['productName'];
$quantities = $_POST['quantity'];
$prices = $_POST['priceEach'];

$requiredDate = date('Y-m-d', strtotime($orderDate . ' + 7 days'));
$status = 'Processing';

$stmt = sql_query(
    $conn,
    'SELECT customerNumber FROM customers WHERE customerName = ?;',
    's',
    [$customerName]
);
$stmt->store_result();

if ($stmt->num_rows === 0) {
    header('Location: $referer?error=customer_not_found');
    exit;
}

$stmt->bind_result($customerNumber);
$stmt->fetch();
$stmt->close();

$stmt = sql_query(
    $conn,
    'INSERT INTO orders (orderDate, customerNumber, requiredDate, status) VALUES (?, ?, ?, ?);',
    'siss',
    [$orderDate, $customerNumber, $requiredDate, $status]
);
$orderId = $stmt->insert_id;
$stmt->close();

for ($i = 0; $i < count($productNames); $i++) {
    $productName = $productNames[$i];
    $quantity = $quantities[$i];
    $priceEach = $prices[$i];

    $stmt = sql_query(
        $conn,
        'SELECT productCode FROM products WHERE productName = ?;',
        's',
        [$productName]
    );
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        header('Location: $referer?error=product_not_found&amp;item=' . urlencode($productName));
        exit;
    }

    $stmt->bind_result($productCode);
    $stmt->fetch();
    $stmt->close();

    $stmt = sql_query(
        $conn,
        'INSERT INTO orderdetails (orderNumber, productCode, quantityOrdered, priceEach, orderLineNumber) VALUES (?, ?, ?, ?, ?);',
        'isidi',
        [$orderId, $productCode, $quantity, $priceEach, $i+1]
    );
    $stmt->close();
}

// TODO: do not use stirng interpolation

header('Location: $referer?status=order_created&amp;id=$orderId');
exit;
}

header("Location: $referer");
exit;
?>