<?php

require "config.php";

use App\Student;

$student_id = $_GET['id'];

$student = Student::getById($student_id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Student</title>
</head>
<body>
<h1>Edit Student</h1>

<form action="save-changes.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $student->getId(); ?>">

	<div>
		<label>Name</label>
		<input type="text" name="name" placeholder="Name" value="<?php echo $student->getName();?>" />	
	</div>

	<div>
		<label>Gender</label>
		<input type="text" name="gender" placeholder="Gender" value="<?php echo $student->getGender();?>" />	
	</div>

	<div>
		<label>Birthdate</label>
		<input type="text" name="birthdate" placeholder="2001/01/01" value="<?php echo $student->getBirthdate();?>" />	
	</div>

	<div>
		<label>Owner</label>
		<input type="text" name="owner" placeholder="Owner" value="<?php echo $student->getOwner();?>" />	
	</div>

	<div>
		<label>Email</label>
		<input type="email" name="email" placeholder="email@address.com" value="<?php echo $student->getEmail();?>" />	
	</div>

	<div>
		<label>Address</label>
		<input type="text" name="address" placeholder="Address" value="<?php echo $student->getAddress();?>" />	
	</div>

	<div>
		<label>Number</label>
		<input type="text" name="contact_number" placeholder="xxxxxxxxxx" value="<?php echo $student->getNumber();?>" />	
	</div>

	<div>
		<button>
			Save
		</button>
		<a href="index.php">Cancel</a>
	</div>
</form>
</body>
</html>