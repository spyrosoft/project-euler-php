<?php
$prime_counter = 0;
$primes = array();
for ($number = 2; $number < 10000000; $number++) {
	$number_is_prime = true;
	foreach ($primes as $key => $prime_number) {
		if ($number % $prime_number == 0) {
			$number_is_prime = false;
			break;
		}
	}
	if ($number_is_prime) {
		$prime_counter++;
		$primes[] = $number;
	}
	if ($prime_counter == 10001) {
		echo $number;
		break;
	}
}

echo ' - ', $prime_counter;
?>

