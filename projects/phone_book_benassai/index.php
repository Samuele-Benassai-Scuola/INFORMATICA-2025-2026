<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubrica telefonica</title>
</head>
<body>
    <?php include_once './php/scripts.php' ?>

    <?php
        add_phone_book("a", "3331231231");
        add_phone_book("b", "3334444444");
        add_phone_book("c", "3337654321");

        print_phone_book();

        add_phone_book("Laura Bianchi", "3331122334");

        edit_phone_book("a", "3331111111");

        remove_phone_book("b");

        print_phone_book();
    ?>

</body>
</html>