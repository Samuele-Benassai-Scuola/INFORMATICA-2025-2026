<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromo</title>
</head>
<body>
    <?php
        $word = "CIAOOAIC";
    ?>

    <?php
        function is_palindrome($str) {
            $low = 0;
            $high = strlen($str) - 1;

            while ($low < $high) {
                if ($str[$low] != $str[$high])
                    return false;
                $low++;
                $high--;
            }

            return true;
        }
    ?>

    <p>
        <?php
            $flag = is_palindrome($word) ? '' : 'non';

            echo 'La stringa '.$word.' '.$flag.' è palindroma';
        ?>
    </p>
</body>
</html>