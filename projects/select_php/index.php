<?php
session_start();
    
require_once('connection.php');
require_once('sqlmodule.php');


$sqlresult = sql_query(
    $conn,
    'SELECT customerNumber, customerName, contactFirstName, contactLastName, phone, city
    FROM customers ORDER BY customerName;'
)->get_result();

if ($sqlresult === false) {
    header('Location: error.php');
    exit;
}

?>

<!--
    TODO: paginazione
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div>
        <form method="GET" action="./pages/order_add.php">
            <button type="submit">Add order</button>
        </form>
    </div>
    <table>
        <tr>
            <th>Customer Name</th>
            <th>Contact Last Name</th>
            <th>Contact First Name</th>
            <th>Phone</th>
            <th>City</th>
            <th>Orders</th>
        </tr>
        <?php
        if ($sqlresult->num_rows > 0) {
            while ($row = $sqlresult->fetch_assoc()) {
                $output = '<form method="GET" action="./pages/orders.php"><tr>';
                $output = $output.'<td>'.$row['customerName'].'</td>';
                $output = $output.'<td>'.$row['contactLastName'].'</td>';
                $output = $output.'<td>'.$row['contactFirstName'].'</td>';
                $output = $output.'<td>'.$row['phone'].'</td>';
                $output = $output.'<td>'.$row['city'].'</td>';
                $output = $output.'<td><button type="submit">-></button></td>';
                $output = $output.'<input type="hidden" name="customerNumber" value='.$row['customerNumber'].'>';
                $output = $output.'</tr></form>';
            
                echo $output;
            }
        }
        ?>
    </table>
    <!--<p>
        Page: <?php echo $page; ?>
    </p>
    <form method="GET" action="./index.php">
        <input type="hidden" name="page" value="<?php echo ($page + 1) ?>">
        <button type="submit">Next Page</button>
    </form>
    <form method="GET" action="./index.php">
        <input type="hidden" name="page" value="<?php echo ($page - 1) ?>">
        <button type="submit">Previous Page</button>
    </form>-->
</body>
</html>