<!DOCTYPE html>
<html>
	<head>
		<title>Tes 7</title>
		<script src="assets/jquery-1.12.4.min.js"></script>
		<script src="assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">		
		<?php include 'koneksi.php'; ?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Table Categories</h3>
					<table class="table-bordered table-responsive table-striped table">
						<tr>
							<th>Id</th>	
							<th>Name</th>
						</tr>
							<?php
							$sql = mysql_query("SELECT * from categories");
							while ($row = mysql_fetch_array($sql)) { ?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
								</tr>
							<?php } ?>
					</table>
				</div>
				<div class="col-md-6">
					<h3>Table Hobbies</h3>
					<table class="table-bordered table-responsive table-striped table">
						<tr>
							<th>Id</th>	
							<th>Person Id</th>
							<th>Hobbies</th>
						</tr>
							<?php
							$sql2 = mysql_query("SELECT * FROM hobbies");
							while ($row = mysql_fetch_array($sql2)) { ?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['person_id']; ?></td>
									<td><?php echo $row['hobbies']; ?></td>
								</tr>
							<?php } ?>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="relation.php" class="btn btn-info">Relation</a>
				</div>
			</div>
		</div>
	</body>
</html>