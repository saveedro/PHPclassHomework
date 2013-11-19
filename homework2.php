<?php 
	
	// For questions 1 to 3, use this if statement
	if ($val % 2 === 0 && $val % 5 === 0) {
		print 'val is awesome';
	} else if ($val % 2 === 0) {
		print 'val is even';
	} else if ($val % 5 === 0) {
		print 'val is a multiple of 5';
	} else {
		print "i don't know what val is";
	}

	// 1. given the above what will $val = 5 output? "val is a multiple of 5"
	// 2. given the above what will $val = 15 output? "val is a multiple of 5"
	// 3. given the above what will $val = 20 output? "val is awesome"

	// For questions 4 to 6, use the below if statement
	if ($val % 2 === 0) {
		print 'val is even';
	} else if ($val % 5 === 0) {
		print 'val is a multiple of 5';
	} else if ($val % 5 === 0 && $val % 2 === 0) {
		print 'val is awesome';
	} else {
		print "i don't know what val is";
	}

	// 4. given the above what will $val = 10 output? "val is even"
	// 5. given the above what will $val = 20 output? "val is even"
	// 6. given the above, will all branches execute at least once given any integer value for $val? explain.
		No. there is never a time when you would have a number divisible by both 5 and 2 that would be divisible 
		by 5 or 2 and would not execute in the first or 2nd branch of the code.

	// 7. Write a _for_ (not a foreach) loop that prints out all values of the below array
	// Note: count($array) gives you the length of the array
		$array = array(1, 2, 3, 4, 5);

		for ($i = 0; $i < $array[$i]; $i++) {
			print $array[$i] .'<br>';
		}



	// 8. Using the array in #7, print the $sum of all the values in the array
		$sum = 0
		for ($i = 0; $i < $array[$i]; $i++) {
			sum += $array[$i];
		}

	// 9. For the below associative array, print 'key: <current_key>, value: <current_value>'. Hint: use a foreach loop
	$assoc_array = array(
		'first_key' => 'weee',
		'second_key' => 'heee',
		'third_key' => 'sheee',
		'fourth_key' => 'smeee'
	);

	// 10. Using the associative array print the following, find a way to store and print the following without hardcoding values.
	// A loop would work here.
	// solution expected: first_keyweeesecondkeyheeethird_keysheeefourth_keysmeee
?>