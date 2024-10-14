<?php 

require_once 'core.php';

function insertIntoRecords($pdo,$first_name, $last_name, $age, $date_added, $dream_job, $target_company, $expected_salary) {

	$sql = "INSERT INTO regis_form (first_name,last_name,age,date_added,dream_job,target_company,expected_salary) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $age, 
		$date_added, $dream_job, $target_company, $expected_salary]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllRecords($pdo) {
	$sql = "SELECT * FROM regis_form";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getID($pdo, $id) {
	$sql = "SELECT * FROM regis_form WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$id])) {
		return $stmt->fetch();
	}
}

function updateRecords($pdo, $id, $first_name, $last_name, $age, $dream_job, $target_company, $expected_salary) {
    $sql = "UPDATE regis_form
            SET first_name = ?,
                last_name = ?,
                age = ?,
                dream_job = ?,
                target_company = ?,
                expected_salary = ?
            WHERE id = ?";
    
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$first_name, $last_name, $age, $dream_job, $target_company, $expected_salary, $id]);

    return $executeQuery;
}


function deleteRecord($pdo, $id) {
	$sql = "DELETE FROM regis_form
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}
}

?>