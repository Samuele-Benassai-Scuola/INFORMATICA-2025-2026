<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media scolastica</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php include('./php/functions.php'); ?>

    <?php
        $marks = [7,5,6,8,9];
        $mean = mean($marks);

        function print_array($array) {
            echo implode(', ', $array);
        }
    ?>

    <h1 class="text-center my-4">
        Voti scolastici
    </h1>

    <div class="text-center">
        <span>Voti:</span>
        <span>
            <?php
                print_array($marks);
            ?>
        </span>
    </div>

    <div class="text-center">
        <span>Media:</span>
        <span>
            <?php echo $mean ?>
        </span>
    </div>

    <div class="text-center">
        <span>Risultato:</span>
        <span>
            <?php print_result($mean) ?>
        </span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>