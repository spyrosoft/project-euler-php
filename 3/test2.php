<?php
$original_number = 200;
for ($number = $original_number - 1; $number > 1; $number--) {
    if ($original_number % $number == 0) {
        $number_has_factor = false;
        for ($number_factor_test = $number - 1; $number_factor_test > 1; $number_factor_test--) {
            if ($number % $number_factor_test == 0) {
                $number_has_factor = true;
                break;
            }
        }
        if ( ! $number_has_factor) {
            echo $number;
			break;
        }
    }
}
?>

