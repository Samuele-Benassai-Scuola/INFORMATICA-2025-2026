<?php
#$servernameDB = 'localhost';
#$usernameDB = 'root';
#$passwordDB = '';
#$dbnameDB = 'classicmodels';

$servernameDB = 'db';
$usernameDB = 'root';
$passwordDB = 'root_password';
$dbnameDB = 'classicmodels';

mysqli_report(MYSQLI_REPORT_OFF);

$conn = new mysqli($servernameDB, $usernameDB, $passwordDB, $dbnameDB);

if ($conn->connect_error) {
    header('Location: error.php');
    exit;
}

$conn->set_charset('utf8mb4');
?>