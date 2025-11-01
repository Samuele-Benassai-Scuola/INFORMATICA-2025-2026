<?php
session_start();

include './php/accounts.php';

$login_error_message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        if (isset($account[$_POST["username"]]) && $account[$_POST["username"]] === $_POST["password"]) {
            $_SESSION["user"] = $_POST["username"];
            $_SESSION["login_time"] = time();

            header("Location: ./home.php");
            exit;
        }
        else {
            $login_error_message = "Invalid username or password";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-3">
        Login
    </h1>

    <?php
        if (isset($login_error_message) && $login_error_message !== "") {
            echo '<p class="text-center text-danger">'.$login_error_message.'</p>';
        }
    ?>

    <div class="mx-auto mt-3 text-center">
        <form method="POST" action="./login.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>