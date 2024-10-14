<?php 

require_once 'core.php'; 
require_once 'models.php';

if (isset($_POST['Btninsert'])) {
	$firstName = trim($_POST['firstname']);
	$lastName = trim($_POST['lastname']);
	$age = trim($_POST['age']);
	$dateadded = trim($_POST['dateadded']);
	$dreamjob = trim($_POST['dreamjob']);
	$targetcompany = trim($_POST['targetcompany']);
	$expectedsalary = trim($_POST['expectedsalary']);

	if (!empty($firstName) && !empty($lastName) && !empty($age) && !empty($dateadded) && !empty($dreamjob)  && !empty($targetcompany)  && !empty($expectedsalary)) {
			$query = insertIntoRecords($pdo, $firstName, $lastName, $age, $dateadded, $dreamjob, $targetcompany, $expectedsalary);

		if ($query) {
			header('Location: sqsample.php');
        exit();
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}

if (isset($_POST['Btnedit'])) {
    $id = $_POST['id'];
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $age = trim($_POST['age']);
    $dreamjob = trim($_POST['dreamjob']);
    $targetcompany = trim($_POST['targetcompany']);
    $expectedsalary = trim($_POST['expectedsalary']);

    echo "ID: $id<br>";
    echo "First Name: $firstName<br>";
    echo "Last Name: $lastName<br>";
    echo "Age: $age<br>";
    echo "Dream Job: $dreamjob<br>";
    echo "Target Company: $targetcompany<br>";
    echo "Expected Salary: $expectedsalary<br>";

    if (!empty($firstName) && !empty($lastName) && !empty($age) && !empty($dreamjob) && !empty($targetcompany) && !empty($expectedsalary)) {
        $query = updateRecords($pdo, $id, $firstName, $lastName, $age, $dreamjob, $targetcompany, $expectedsalary);
        
        if ($query) {
            header('Location: sqsample.php');
            exit();
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}


if (isset($_POST['deleteBtn'])) {
	$query = deleteRecord($pdo, $_GET['id']);

	if ($query) {
		header('Location: sqsample.php');
	exit();
	}
	else {
		echo "Deletion Failed";
	}
}

?>