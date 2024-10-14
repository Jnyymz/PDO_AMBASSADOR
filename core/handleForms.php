<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewAmbassador'])) {
	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$email = trim($_POST['email']);
	$phoneNum = trim($_POST['phoneNum']);
	$country = trim($_POST['country']);
	$program_enrolled = trim($_POST['program_enrolled']);
	$enrollment_date = trim($_POST['enrollment_date']);

	if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($phoneNum) && !empty($country)  && !empty($program_enrolled)  && !empty($enrollment_date)) {
			$query = insertIntoAmbassadorRecords($pdo, $firstname, $lastname, 
			$email, $phoneNum, $country, $program_enrolled, $enrollment_date);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editAmbassador'])) {
	$ambassadorID = isset($_POST['ambassadorID']) ? trim($_POST['ambassadorID']) : null;
	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$email = trim($_POST['email']);
	$phoneNum = trim($_POST['phoneNum']);
	$country = trim($_POST['country']);
	$program_enrolled = trim($_POST['program_enrolled']);
	$enrollment_date = trim($_POST['enrollment_date']);

	echo "<pre>";
    var_dump($_POST);
    echo "</pre>";


	if ($ambassadorID === null || $ambassadorID === '' ||
    $firstname === '' || $lastname === '' || $email === '' || $phoneNum === '' || $country === '' || $program_enrolled  === '' || $enrollment_date ==='') {
        echo "Make sure that all fields are not empty.";
    } else {
		$query = updateAmbassador($pdo, $ambassadorID, $firstname, $lastname, $email, $phoneNum, $country, $program_enrolled, $enrollment_date);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

    }

}





if (isset($_POST['deleteAmbassador'])) {

	$query = deleteAmbassador($pdo, $_GET['ambassadorID']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>