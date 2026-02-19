<?php
session_start();

require_once('../connection.php');
require_once('../sqlmodule.php');

if (!isset($_GET['customerNumber'])) {
    header('Location: ../errore.php');
    exit;
}

$customerNumber = $_GET['customerNumber'];

$sqlresult = sql_query(
    $conn,
    'SELECT o.orderNumber, o.orderDate, o.requiredDate, o.shippedDate, o.status, od.productCode, od.quantityOrdered, od.priceEach
    FROM orders o LEFT JOIN orderdetails od ON o.orderNumber = od.orderNumber
    WHERE o.customerNumber IN (?) ORDER BY orderNumber, orderDate;',
    's',
    [$customerNumber]
)->get_result();

if ($sqlresult === false) {
    header('Location: error.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
        <form action="../index.php" method="GET">
            <button type="submit"><-</button>
        </form>
    </div>
    <table>
        <tr>
            <th>Order Number</th>
            <th>Order Date</th>
            <th>Required Date</th>
            <th>Shipped Date</th>
            <th>Status</th>
            <th>Product Code</th>
            <th>Quantity Ordered</th>
            <th>Price Each</th>
        </tr>
        <form action=""></form>
        <?php
        if ($sqlresult->num_rows > 0) {
            while ($row = $sqlresult->fetch_assoc()) {
                $output = '<tr>';
                $output = $output.'<td>'.$row['orderNumber'].'</td>';
                $output = $output.'<td>'.$row['orderDate'].'</td>';
                $output = $output.'<td>'.$row['requiredDate'].'</td>';
                $output = $output.'<td>'.$row['shippedDate'].'</td>';
                $output = $output.'<td>'.$row['status'].'</td>';
                $output = $output.'<td>'.$row['productCode'].'</td>';
                $output = $output.'<td>'.$row['quantityOrdered'].'</td>';
                $output = $output.'<td>'.$row['priceEach'].'</td>';
                $output = $output.'</tr>';
            
                echo $output;
            }
        }
        ?>
    </table>
</body>
</html>