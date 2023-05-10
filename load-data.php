<?php

require "config.php";

use App\Student;

try {
	Student::register('Chris Redfield', 'Male', '2002/4/2', 'John Doe','email1@address.com', '111 First Street Uno City', '1111111111');
	echo "<li>Added 1 student";

	$pets = [
		[
			'name' => 'Albert Whiskers',
			'gender' => 'Male',
			'birthdate' => '2002/4/3',
			'owner' => 'Jane Doe',
			'email' => 'email2@address.com',
			'address' => '222 2nd Street Dos City',
			'contact_number' => '2222222222'

		],
		[
			'name' => 'William Purrkin',
			'gender' => 'Male',
			'birthdate' => '2002/4/4',
			'owner' => 'Jane Doe',
			'email' => 'email3@address.com',
			'address' => '333 3rd Street Tres City',
			'contact_number' => '3333333333'
		]
	];
	Student::registerMany($pets);
	echo "<li>Added " . count($pets) . " more students";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

