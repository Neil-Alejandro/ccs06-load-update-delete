<?php

require "config.php";

use App\Student;

$pets = Student::list();
?>

<h1>Pets</h1>

<table border="1" cellpadding="5">
<?php foreach ($pets as $student): ?>
<tr>
<td><?php echo $student->getId(); ?></td>
<td><?php echo $student->getName(); ?></td>
<td><?php echo $student->getBirthdate(); ?></td>
<td><?php echo $student->getGender(); ?></td>
<td><?php echo $student->getOwner(); ?></td>
<td><?php echo $student->getEmail(); ?></td>
<td><?php echo $student->getAddress(); ?></td>
<td><?php echo $student->getNumber(); ?></td>
<td>
	<a href="edit-student.php?id=<?php echo $student->getId(); ?>">EDIT</a>
</td>
<td>
	<a href="delete-student.php?id=<?php echo $student->getId(); ?>">DELETE</a>
</td>
</tr>
<?php endforeach ?>
</table>
<a href="truncate-table.php?id=<?php echo $student->getId(); ?>">TRUNCATE TABLE</a>