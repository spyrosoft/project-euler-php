<?php

global $primes;
$primes = generate_prime_numbers_up_to(1000);
count_divisors_of_triangle_numbers();
//echo count_factors(1249975000);

function generate_prime_numbers_up_to($limit) {
	$primes = array();
	for ($number = 2; $number <= $limit; $number++) {
		$number_is_prime = true;
		foreach ($primes as $key => $prime) {
			if ($number % $prime == 0) {
				$number_is_prime = false;
				break;
			}
		}
		if ($number_is_prime) {
			$primes[] = $number;
		}
	}
	return $primes;
}

function count_divisors_of_triangle_numbers() {
	$current_triangle_number = 0;
	for ($counter = 1; $counter < 50000; $counter++) {
		$current_triangle_number += $counter;
		//echo '-', $current_triangle_number, '-';
		if (count_divisors($current_triangle_number) > 5) {
			break;
		}
	}
}

function count_divisors($number) {
	global $primes;
	$prime_factors = array();
	for ($counter = 0; $counter < count($primes) OR $primes[$counter] > $number / 2; $counter++) {
		if ($number % $primes[$counter] == 0 AND $number != $primes[$counter]) {
			$prime_factors[(string) $primes[$counter]] += 1;
			if ($count_divisors($number / $primes[$counter]) < 2) {
				return 0;
			}
		}
	}
	$total = 0;
	foreach ($prime_factors as $factor => $count) {
		$total += $count + 1;
	}
	return $total;
}

?>

