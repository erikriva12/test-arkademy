<!DOCTYPE html>
<html>
	<head>
		<title>Tes 7</title>
		<script src="assets/jquery-1.12.4.min.js"></script>
		<script src="assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
		<script src="assets/jquery.isotope.js" type="text/javascript"></script> 
		<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<?php include 'koneksi.php'; ?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Table Normal Relation</h3>
					<table class="table-bordered table-responsive table-striped table">
						<tr>
							<th>Id</th>	
							<th>Person Name</th>
							<th>Hobbies</th>
						</tr>
							<?php
							$sql = mysql_query("SELECT * from categories, hobbies WHERE categories.id = hobbies.person_id;");
							while ($row = mysql_fetch_array($sql)) { ?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['hobbies']; ?></td>
								</tr>
							<?php } ?>
					</table>
				</div>
				<div class="col-md-6">
					<h3>Table Simple Relation</h3>
					<table class="table-bordered table-responsive table-striped table">
						<tr>
							<th>Id</th>	
							<th>Person Name</th>
							<th>Hobbies</th>
						</tr>
							<?php
							$sql = mysql_query("SELECT categories.id, categories.name, GROUP_CONCAT(hobbies.hobbies) AS hobbies FROM categories, hobbies WHERE categories.id = hobbies.person_id GROUP BY categories.id, categories.name;");
							while ($row = mysql_fetch_array($sql)) { ?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['hobbies']; ?></td>
								</tr>
							<?php } ?>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="index.php" class="btn btn-info">Back</a>
				</div>
			</div>
		</div>
	</body>
</html>