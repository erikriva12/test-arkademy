<!DOCTYPE html>
<html>
<head>
	<title>
		Tes !
	</title>
		<script src="assets/jquery-1.12.4.min.js"></script>
		<script src="assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>&nbsp</h1>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-6" style="background: rgba(245, 245, 245, 1)">
				<center>
					<h4>
						Masukkan Username & Password Anda
					</h4>
					<form action="" method="post">
						<input type="text" name="user" placeholder="Username" class="form-control">
						<br>
						<input type="password" name="pass" placeholder="Password" class="form-control">
						<br>
						<input type="submit" name="masuk" class="btn btn-info" value="Masuk">
					</form>
					<h4>&nbsp;</h4>
				</center>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	<?php
	$pesan = "";
	if (isset($_POST['masuk'])) {

		$user = $_POST['user'];
		$pass = $_POST['pass'];

		if (empty($user)) {
			$pesan = "Lengkapi Form Login, Username Kosong";
		}
		else{
			if(preg_match("/^[a-z_]*$/", $user)==0){			
				$pesan = "Username, harus terdiri dari huruf kecil dan underscore. Dengan pangjang 8 karakter.";
			}
		}

		if (empty($pass)) {
			$pesan = "Lengkapi Form Login, Password Kosong";
		}
		else{
			if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[_])(?=.*[A-Z]).*$/", $pass)==0){
				$pesan= "Password, harus terdiri dari huruf kecil, huruf besar, angka, dang karakter spesial. Dengan pangjang 8 karakter.";
			}
		}

		if(empty($pesan)){
			$pesan = "SELAMAT ANDA BENAR";
		}
		

	}
	?>
	<center>
		<?php echo $pesan; ?>
	</center>
</body>
</html>