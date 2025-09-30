<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
        $min_font = 16;
        $max_font = 40;

        $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed arcu nulla, placerat ac nibh id, maximus bibendum ligula. Nam ut elit ac arcu malesuada efficitur ac ac nibh. Maecenas et gravida velit. Vestibulum malesuada viverra arcu sit amet interdum. Sed nisi libero, facilisis et semper vel, lacinia vel mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae ornare mauris. Donec cursus risus lectus, sit amet placerat tellus auctor eu. Curabitur nec sagittis metus.";
		
        echo '<p class="text-success" style="font-size:' . rand($min_font, $max_font) . 'px">' . $str . '</p>';
        echo '<p class="text-primary" style="font-size:' . rand($min_font, $max_font) . 'px">' . strtoupper($str) . '</p>';
        echo '<h1 class="text-danger">' . strlen($str) . '</h1>';
        echo '<h2 class="text-warning">' . str_word_count($str) . '</h2>';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>