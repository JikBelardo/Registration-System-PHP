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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getId = getId($pdo, $_GET['id']); ?>
	<form action="handleforms.php?id=<?php echo $_GET['id']; ?>" method="POST">

		<div class="Container" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getId['first_name']; ?></p>
			<p>Last Name: <?php echo $getId['last_name']; ?></p>
			<p>Gender: <?php echo $getId['age']; ?></p>
			<p>Date added: <?php echo $getId['date_added']; ?></p>
			<p>Dream Job: <?php echo $getId['dream_job']; ?></p>
			<p>target company: <?php echo $getId['target_company']; ?></p>
			<p>expected salary: <?php echo $getId['expected_salary']; ?></p>
			<input type="submit" name="deleteBtn" value="Delete">
		</div>
	</form>
</body>
</html>