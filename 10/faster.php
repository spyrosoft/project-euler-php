<?php
$total = 2;
$primes = array(2);
for ($number = 3; $number < 2000000; $number+=2) {
	$number_is_prime = true;
	foreach ($primes as $key => $prime) {
		if ($number % $prime == 0) {
			$number_is_prime = false;
			break;
		}
	}
	if ($number_is_prime) {
		$total += $number;
		$primes[] = $number;
		echo $number, "\n";
	}
}
echo '-', $total, '-';
?>

