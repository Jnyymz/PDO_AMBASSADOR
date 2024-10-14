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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getAmbassadorByID = getAmbassadorByID($pdo, $_GET['ambassadorID']); ?>
	<form action="core/handleForms.php?ambassadorID=<?php echo $_GET['ambassadorID']; ?>" method="POST">

		<div class="AmbassadorContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getAmbassadorByID['firstname']; ?></p>
			<p>Last Name: <?php echo $getAmbassadorByID['lastname']; ?></p>
			<p>Email: <?php echo $getAmbassadorByID['email']; ?></p>
			<p>Phone Number: <?php echo $getAmbassadorByID['phoneNum']; ?></p>
			<p>Country: <?php echo $getAmbassadorByID['country']; ?></p>
			<p>Program: <?php echo $getAmbassadorByID['program_enrolled']; ?></p>
			<p>Date: <?php echo $getAmbassadorByID['enrollment_date']; ?></p>
			<input type="submit" name="deleteAmbassador" value="Delete">
		</div>
	</form>
</body>
</html>