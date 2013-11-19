<?php 

	// 1. List the types for the following values
	// a. true
	// b. 0
	// c. 0.1
	// d. 'Hello World'
	// e. 'Good Bye World'

	$one = 1;
	$three = 3;
	$ten = 10;
	// 2. What are are the values of the following expressions given the above variables?
	$one + 0; // = ?


	// 3. What are the output of the following values
	$num_index = 3;
	$assoc_index = 'first'
	$array = array(1, 2, 3, 4, 5);
	$assoc_array = array(
		'first' => 20,
		'second' => 14
	);

	$array[1] + $array[3]; // = ?
	$array[4] + 10 // = ?

	$array[3] + $assoc_array['first'] + $assoc_array['second']; // = ?
	$assoc_array[$assoc_index] + $assoc_array['first'] + $array[$num_index]; // =?

	// 4. Define an associative array with the following indices and values
	// 'first_name' with the your first name as the value
	// 'last_name' with your last name as the value
	// 'age' with your age as the value

	// 5. Using this associative array, create a form with the key being the name and the value being the value of the input field ie
	// <input type="text" value="<the_array_value_here>" name="<the_array_key_here>"> for the 3 different indices and values
	// When you submit it, print back out each key and value for the input

 ?>