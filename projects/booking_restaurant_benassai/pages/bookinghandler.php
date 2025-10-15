<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resoconto Prenotazione</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
        $waiters = ['a', 'b', 'c', 'd', 'e'];

        $costStarter = 5.0;
        $costFirstDish = 6.0;
        $costSecondDish = 7.0;

        $partialDiscount = .1;
        $completeDiscount = .15;

        $costParkingMonitored = 5.0;
        $costParkingUnmonitored = 3.0;

        $error["code"] = 200;
        $error["message"] = "";
    ?>

    <?php
        $name = $_POST["name"] ?? '';
        $surname = $_POST["surname"] ?? '';
        $table = $_POST["table"];
        $time = $_POST["time"] ?? '';
        $notes = $_POST["notes"] ?? '';
        $wantStarter = isset($_POST["wantStarter"]) ? true : false;
        $wantFirstDish = isset($_POST["wantFirstDish"]) ? true : false;
        $wantSecondDish = isset($_POST["wantSecondDish"]) ? true : false;
        // 0: no parking
        // 1: managed parking
        // 2: unmanaged parking
        $parkingMode = $_POST["parkingMode"];    
    ?>

    <?php
        $assignedWaiter = $waiters[random_int(0, 4)];
        $timestamp = date("d/m/Y H:i");
    ?>

    <?php
        if (!$wantFirstDish && !$wantSecondDish) {
            $error["code"] = 400;
            $error["message"] = "Deve essere inserito almeno un piatto che non sia l'antipasto";
        }
    ?>

    <?php
        $price = 0.0;
        if ($error["code"] == 200) {
            if ($wantStarter)
                $price += $costStarter;
            if ($wantFirstDish)
                $price += $costFirstDish;
            if ($wantSecondDish)
                $price += $costSecondDish;

            if ($wantStarter && $wantFirstDish && $wantSecondDish)
                $price *= 1 - $completeDiscount;
            else if ($wantFirstDish && $wantSecondDish)
                $price *= 1 - $partialDiscount;

            switch ($parkingMode) {
                case 1:
                    $price += $costParkingMonitored;
                    break;
                case 2:
                    $price += $costParkingUnmonitored;
                    break;
            }
        }
    ?>

    <h1 class="text-center">
        Resoconto
    </h1>

    <?php
        if ($error["code"] != 200) {
            echo '
                <table class="table w-50 mx-auto text-center">
                    <tbody>
                        <tr>
                            <th>Momento prenotazione</th>
                            <td>'.$timestamp.'</td>
                        </tr>
                        <tr>
                            <th>Errore</th>
                            <td>'.$error["message"].'</td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    <a href="../index.php">Torna alla prenotazione</a>
                </p>
            ';
        }
        else {
            $dishes = [];
            if ($wantStarter)
                $dishes[] = 'Antipasto';
            if ($wantFirstDish)
                $dishes[] = 'Primo';
            if ($wantSecondDish)
                $dishes[] = 'Secondo';

            $parking = '';
            switch ($parkingMode) {
                case 1:
                    $parking = 'Parcheggio custodito';
                    break;
                case 2:
                    $parking = 'Parcheggio non custodito';
                    break;
                case 0:
                    $parking = 'No parcheggio';
                    break;
            }
 
            echo '
                <table class="table w-50 mx-auto text-center">
                    <tbody>
                        <tr>
                            <th>Nome</th>
                            <td>'.$name.'</td>
                        </tr>
                        <tr>
                            <th>Cognome</th>
                            <td>'.$surname.'</td>
                        </tr>
                        <tr>
                            <th>Numero tavolo</th>
                            <td>'.$table.'</td>
                        </tr>
                        <tr>
                            <th>Data</th>
                            <td>'.$time.'</td>
                        </tr>
                        <tr>
                            <th>Note</th>
                            <td>'.$notes.'</td>
                        </tr>
                        <tr>
                            <th>Piatti</th>
                            <td>'.implode(', ', $dishes).'</td>
                        </tr>
                        <tr>
                            <th>Parcheggio</th>
                            <td>'.$parking.'</td>
                        </tr>
                        <tr>
                            <th>Costo</th>
                            <td>'.number_format($price, 2).'€</td>
                        </tr>
                        <tr>
                            <th>Cameriere</th>
                            <td>'.$assignedWaiter.'</td>
                        </tr>
                        <tr>
                            <th>Momento prenotazione</th>
                            <td>'.$timestamp.'</td>
                        </tr>
                    </tbody>
                </table>
            ';
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>