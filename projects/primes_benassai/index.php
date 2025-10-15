<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primi</title>
</head>
<body>
    <?php
        $primeCount = 100;
    ?>

    <?php
        function has_factors(&$num, &$factors) {
            foreach ($factors as $factor) {
                if ($num % $factor === 0)
                    return true;
            }
            return false;
        }
    ?>

    <?php
        $primes = [];
        $i = 2;
        
        while (count($primes) < $primeCount) {
            if (count($primes) === 0) {
                $primes[] = $i;
            }
            else {
                while (has_factors($i, $primes))
                    $i++;
                $primes[] = $i;
            }
            $i++;
        }
    ?>

    <ul>
        <?php
            foreach ($primes as $prime) {
                echo '<li>'.$prime.'</li>';
            }
        ?>
    </ul>
</body>
</html>