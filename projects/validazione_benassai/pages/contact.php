<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <?php
        function sanitize_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');

            return $data;
        }
    ?>

    <?php
        $name = sanitize_input($_REQUEST["name"] ?? '');
        $email = sanitize_input($_REQUEST["email"] ?? '');
        $message = sanitize_input($_REQUEST["message"] ?? '');

        $valid = true;

        $name_regex = '/^[a-zA-Z ]*[a-zA-Z]+[a-zA-Z ]*$/';
        if (!preg_match($name_regex, $name)) {
            echo 'name';
            $valid = false;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'email';
            $valid = false;
        }

        if (strlen($message) > 300) {
            echo 'message';
            $valid = false;
        }

        echo $valid ? 'Ok' : 'No';
    ?>
</body>
</html>