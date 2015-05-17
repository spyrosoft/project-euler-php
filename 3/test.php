<?php

// 600851475143
// 6857 87625999
// 6857 71 1234169
// 6857 71 839 1471

$original_number = 6857;
for ($number = 1; $number < $original_number; $number++) {
	if ($original_number % $number == 0) {
		echo $number;
		break;
	}
}

/*
$original_number = 600851475143;
for ($number = 1; $number < $original_number / 2 + 1; $number++) {
    if ($original_number % $number == 0) {
        $number_has_factor = false;
        for ($number_factor_test
				= ($original_number / $number) / 2 + 1;
				$number_factor_test > 1;
				$number_factor_test--) {
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
*/
?>

