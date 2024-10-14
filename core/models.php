<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertIntoAmbassadorRecords($pdo,$firstname, $lastname, $email, $phoneNum, $country, $program_enrolled, $enrollment_date) {

	$sql = "INSERT INTO ambassadors (firstname,lastname,email,phoneNum,country,program_enrolled,enrollment_date) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$firstname, $lastname, $email, $phoneNum, $country, $program_enrolled, $enrollment_date]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllAmbassadorRecords($pdo) {
	$sql = "SELECT * FROM ambassadors";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getAmbassadorByID($pdo, $ambassadorID) {
	$sql = "SELECT * FROM ambassadors WHERE ambassadorID = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$ambassadorID])) {
		return $stmt->fetch();
	}
}

function updateAmbassador($pdo, $ambassadorID, $firstname, $lastname, 
	$email, $phoneNum, $country, $program_enrolled, $enrollment_date) {

	$sql = "UPDATE ambassadors 
				SET firstname = ?, 
					lastname = ?, 
					email = ?, 
					phoneNum = ?, 
					country = ?, 
					program_enrolled = ?, 
					enrollment_date = ? 
			WHERE ambassadorID = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$firstname, $lastname, $email, 
		$phoneNum, $country, $program_enrolled, $enrollment_date, $ambassadorID]);

	if ($executeQuery) {
		return true;
	}
}



function deleteAmbassador($pdo, $ambassadorID) {

	$sql = "DELETE FROM ambassadors WHERE ambassadorID = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$ambassadorID]);

	if ($executeQuery) {
		return true;
	}

}




?>