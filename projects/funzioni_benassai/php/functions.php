<?php
    function mean($nums) {
        return floatval(array_sum($nums)) / count($nums);
    }

    function print_result($mean) {
        echo $mean >= 6 ? "Promosso" : "Bocciato";
    }
?>