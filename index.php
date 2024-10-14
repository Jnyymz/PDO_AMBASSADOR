<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Ambassadors Management System. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstname">First Name: </label> <input type="text" name="firstname"></p>
		<p><label for="lastname">Last Name: </label> <input type="text" name="lastname"></p>
		<p><label for="email">Email: </label> <input type="email" name="email"></p>
		<p><label for="phoneNum">Phone Number: </label> <input type="tel" name="phoneNum"></p>
		<p><label for="country">Country: </label> <input type="text" name="country"></p>
		<p><label for="program_enrolled">Program Enrolled: </label> <input type="text" name="program_enrolled"></p>
		<p><label for="enrollment_date">Date: </label> <input type="date" name="enrollment_date">
			<input type="submit" name="insertNewAmbassador">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px; text-align: center;">
	  <tr>
	    <th>Ambassador ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Email</th>
	    <th>Phone Number</th>
	    <th>Country</th>
	    <th>Program</th>
	    <th>Enrollment Date</th>
        <th>Action</th>
	  </tr>

	  <?php $seeAllAmbassadorRecords = seeAllAmbassadorRecords($pdo); ?>
	  <?php foreach ($seeAllAmbassadorRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['ambassadorID']; ?></td>
	  	<td><?php echo $row['firstname']; ?></td>
	  	<td><?php echo $row['lastname']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['phoneNum']; ?></td>
	  	<td><?php echo $row['country']; ?></td>
	  	<td><?php echo $row['program_enrolled']; ?></td>
	  	<td><?php echo $row['enrollment_date']; ?></td>
	  	<td>
	  		<a href="editAmbassador.php?ambassadorID=<?php echo $row['ambassadorID'];?>">Edit</a>
	  		<a href="deleteAmbassador.php?ambassadorID=<?php echo $row['ambassadorID'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>