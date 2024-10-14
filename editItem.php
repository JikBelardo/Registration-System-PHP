<?php require_once 'core.php'; ?>
<?php require_once 'models.php'; ?>
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
	<?php $getID = getID($pdo, $_GET['id']); ?>
	<form action="handleforms.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
		<p>
			<label for="firstname">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getID['first_name']; ?>">
		</p>
		<p>
			<label for="lastname">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getID['last_name']; ?>">
		</p>
		<p>
			<label for="age">Age</label>
			<input type="text" name="age" value="<?php echo $getID['age']; ?>">
		</p>
		<p>
			<label for="dreamjob">Dream job</label>
			<input type="text" name="dreamjob" value="<?php echo $getID['dream_job']; ?>">
		</p>
		<p>
			<label for="targetcompany">Target Company</label>
			<input type="text" name="targetcompany" value="<?php echo $getID['target_company']; ?>"></p>
		<p>
			<label for="expectedsalary">Expected salary</label>
			<input type="text" name="expectedsalary" value="<?php echo $getID['expected_salary']; ?>">
			<input type="submit" name="Btnedit">
		</p>
	</form>
</body>
</html>