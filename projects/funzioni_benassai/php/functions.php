<?php
    function mean($nums) {
        if (count($nums) === 0)
            return 0;
        return floatval(array_sum($nums)) / count($nums);
    }

    function print_result($mean) {
        echo $mean >= 6 ? "Promosso" : "Bocciato";
    }
?>