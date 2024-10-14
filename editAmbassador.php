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
	<?php $getAmbassadorByID = getAmbassadorByID($pdo, $_GET['ambassadorID']); ?>
	<form action="core/handleForms.php" method="POST">
        <p>
			<label for="ambassadorID">Ambassador ID: </label> 
			<input type="hidden" name="ambassadorID" value="<?php echo $getAmbassadorByID['ambassadorID']; ?>">
		</p>
		<p>
			<label for="firstname">First Name: </label> 
			<input type="text" name="firstname" value="<?php echo $getAmbassadorByID['firstname']; ?>">
		</p>
		<p>
			<label for="lastname">Last Name: </label> 
			<input type="text" name="lastname" value="<?php echo $getAmbassadorByID['lastname']; ?>">
		</p>
		<p>
			<label for="email">Email: </label>
			<input type="email" name="email" value="<?php echo $getAmbassadorByID['email']; ?>">
		</p>
		<p>
			<label for="phoneNum">Phone Number: </label>
			<input type="tel" name="phoneNum" value="<?php echo $getAmbassadorByID['phoneNum']; ?>">
		</p>
		<p>
			<label for="country">Country: </label>
			<input type="text" name="country" value="<?php echo $getAmbassadorByID['country']; ?>">
		</p>
		<p>
			<label for="program_enrolled">Program: </label>
			<input type="text" name="program_enrolled" value="<?php echo $getAmbassadorByID['program_enrolled']; ?>">
        </p>
        <p>
			<label for="enrollment_date">Date: </label>
			<input type="date" name="enrollment_date" value="<?php echo $getAmbassadorByID['enrollment_date']; ?>">
			<input type="submit" name="editAmbassador">
		</p>
	</form>
</body>
</html>
