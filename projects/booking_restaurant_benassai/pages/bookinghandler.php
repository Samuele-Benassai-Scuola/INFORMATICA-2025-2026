<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $waiters = ['a', 'b', 'c', 'd', 'e'];

        $costStarter = 5.0;
        $costFirstDish = 6.0;
        $costSecondDish = 7.0;

        $costParkingMonitored = 5.0;
        $costParkingUnmonitored = 3.0;
    ?>

    <?php
        $name = $_POST["name"] ?? '';
        $surname = $_POST["surname"] ?? '';
        $table = $_POST["table"];
        $wantStarter = isset($_POST["wantStarter"]) ? true : false;
        $wantFirstDish = isset($_POST["wantFirstDish"]) ? true : false;
        $wantSecondDish = isset($_POST["wantSecondDish"]) ? true : false;
        $parkingMode = $_POST["parkingMode"];

        var_dump($name);
        var_dump($surname);
        var_dump($table);
        var_dump($wantStarter);
        var_dump($wantFirstDish);
        var_dump($wantSecondDish);
        var_dump($parkingMode);
    ?>
</body>
</html>