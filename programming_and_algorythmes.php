<?php

$arr = [1286,17,432,45,3,56,8,55,37,9011,53,2,3,7,5,89,765,43,57,89,444]; 
$max = 0;
$firstToMax = 0;

foreach ($arr as $current) {
	if ($current > $max) {
		$firstToMax = $max;
		$max = $current;
	}
	if ($current > 	$firstToMax and $current < $max) {
			$firstToMax = $current;
	}
	
}

echo $max."\n";
echo $firstToMax;
echo "\n\nsecond problem\n\n";

$max = $arr[0]; $min = $arr[0]; $maxIndex = 0; $minIndex = 0;

for ($index = 0; $index < count($arr); $index++ ) {
	echo $index."\n"; 
	if ($arr[$index] > $max) {
		$max = $arr[$index]; $maxIndex = $index; 
	}
	elseif ($arr[$index] < $min) {
		$min = $arr[$index]; $minIndex = $index; 
	}
	
}
echo $max."\n"; echo $maxIndex."\n";
echo $min."\n"; echo $minIndex."\n";


?>                        
