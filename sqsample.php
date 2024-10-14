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
	<h3>Welcome to the Student Management System. Input your details here to register</h3>
	<form action="handleforms.php" method="POST">
		<p><label for="firstname">first name</label> <input type="text" name="firstname"></p>
		<p><label for="lastname">last name</label> <input type="text" name="lastname"></p>
		<p><label for="age">age</label> <input type="text" name="age"></p>
		<p><label for="dateadded">date added</label> <input type="text" name="dateadded"></p>
		<p><label for="dreamjob">dream job</label> <input type="text" name="dreamjob"></p>
		<p><label for="targetcompany">target comapany</label> <input type="text" name="targetcompany">
		<p><label for="expectedsalary">expected salary</label> <input type="text" name="expectedsalary">
			<input type="submit" name="Btninsert">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>age</th>
	    <th>date added</th>
	    <th>dream course</th>
	    <th>target company</th>
	    <th>expected salary</th>
	  </tr>
	  <?php $seeAllRecords = seeAllRecords($pdo); ?>
	  <?php foreach ($seeAllRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['date_added']; ?></td>
	  	<td><?php echo $row['dream_job']; ?></td>
	  	<td><?php echo $row['target_company']; ?></td>
	  	<td><?php echo $row['expected_salary']; ?></td>
		<td>
			<a href="editItem.php?id=<?php echo $row['id'];?>">Edit</a>
			<a href="delItem.php?id=<?php echo $row['id'];?>">Delete</a>
		</td>
	  </tr>
	  <?php } ?>
	</table>
</body>
</html>