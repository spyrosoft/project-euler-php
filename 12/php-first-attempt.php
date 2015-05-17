<?php

//generate_triangle_numbers();
//echo count_factors(1249975000);

echo count_factors(20);

function generate_triangle_numbers() {
	$current_triangle_number = 0;
	for ($counter = 0; $counter < 50000; $counter++) {
		$current_triangle_number += $counter;
	//	if (count_factors($current_triangle_number) > 200) {
	//		break;
	//	}
		echo $current_triangle_number, "\n";
	}
}

function count_factors($number) {
	return count_inner_factors_recursively($number) + 2; // Two extra for 1 and the number.
}

function count_inner_factors_recursively($number) {
	for ($counter = 2; $counter < $number; $counter++) {
		if ($number % $counter == 0) {
			return 1 + count_factors($number / $counter);
		}
	}
}

/*
function count_factors($number) {
	$factors = 2;
	for ($counter = $number - 1; $counter > 1; $counter--) {
		if ($number / $counter == (int)($number / $counter)) {
			$factors++;
			echo $counter, "\n";
		}
	}
	return $factors;
}*/

?>

