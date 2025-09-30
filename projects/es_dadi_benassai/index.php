<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 class="text-center my-4">
        IL RISULTATO DEI DADI È
    </h1>

    <?php
        $dice_number = 2;

        $dice_classes = array();
        $dice_classes[1] = "dice-1";
        $dice_classes[2] = "dice-2";
        $dice_classes[3] = "dice-3";
        $dice_classes[4] = "dice-4";
        $dice_classes[5] = "dice-5";
        $dice_classes[6] = "dice-6";

        $random_values = array();
        for ($i = 0; $i < $dice_number; $i++)
            $random_values[$i] = rand(1, 6);

        //$random_value_1 = rand(1, 6);
        //$random_value_2 = rand(1, 6);
    ?>

    <div class="text-center mx-auto my-4 d-flex justify-content-center">
        <?php
            foreach ($random_values as $value)
                echo '<div class="mx-2 dice ' . $dice_classes[$value] . '"></div>';
        ?>
    </div>

    <div class="mx-auto my-4 text-center">
        <form action="">
            <button type="submit" class="btn btn-primary btn-lg mx-auto">
                LANCIA DI NUOVO
            </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>