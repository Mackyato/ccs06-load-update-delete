<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Browny', 'Male', '2022-09-12', 'David', 'da@vid.com', 'pangasinan', '09123456789');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Blacky',
			'gender' => 'Male',
			'birthdate' => '1991-10-10',
			'owner' => 'Marcus',
			'email' => 'mar@cus.com',
			'address' => 'tarlac',
			'contact_number' => '09987654321'
		],
		[
			'name' => 'Whyti',
			'gender' => 'Female',
			'birthdate' => '2004-12-12',
			'owner' => 'Maricel',
			'email' => 'mari@cel.com',
			'address' => 'tarlac',
			'contact_number' => '09896745231'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

