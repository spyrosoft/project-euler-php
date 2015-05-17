<?php
/*
$sum	= array(3710728753, 3902102798, 7979982208, 3759024651, 0135740250);
$addition = array(4637693767, 7490009712, 6481248969, 7007805041, 7018260538);

for ($index = 0; $index < count($sum); $index++) {
	$sum[$index] += $addition[$index];
	if ($sum[$index] > 9999999999) {
		if ($sum[$index + 1]) {
			$sum[$index + 1] += 1;
		} else {
			$sum[$index + 1] = 1;
		}
		$sum[$index] -= 10000000000;
	}
}

echo join('', $sum);
*/

//$sum	= '37107287533902102798797998220837590246510135740250';
//$number = '46376937677490009712648124896970078050417018260538';
//         83484225222392112522447123117807668296927154000788
//         8348422520139211251044612311787668296937042885859
//         83484225211392113601537013117807668296927154000788

$sum = '99999';
$number = '99999';
$carry = array();
// 199998;

$sum = array_reverse(str_split($sum));
$number = array_reverse(str_split($number));

for ($counter = 0; $counter < count($number); $counter++) {
	$current_sum = $number[$counter] + $sum[$counter];
	if ($carry[$counter] > 0) {
		$current_sum += $carry[$counter];
		$carry[$counter] = 0;
	}
	//echo join('', array_reverse($sum)), "\n";
	//echo $number[$counter], '+', $sum[$counter], '=', $current_sum, "\n";
	if ($current_sum >= 10) {
		$sum[$counter] = $current_sum - 10;
		$carry[$counter + 1] = 1;
	} else {
		$sum[$counter] = $current_sum;
	}
}

function carry_the_one($sum, $index) {
	if ($sum[$index]) {
		$current_sum = $sum[$index] + 1;
		//echo $current_sum, "\n";
		if ($current_sum == 10) {
			$sum[$index] == 0;
			echo 'd: ', $sum[$index], ' - s:', $current_sum, "\n";
			echo join('', array_reverse($sum)), "\n";
			$sum = carry_the_one($sum, $index + 1);
		} else {
			$sum[$index] = $current_sum;
		}
	} else {
		$sum[$index] = 1;
	}
	return $sum;
}

echo join('', array_reverse($sum));

?>

