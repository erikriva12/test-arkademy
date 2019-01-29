<!DOCTYPE html>
<html>
	<head>
		<title>Tes 5</title>
	</head>
	<body>
		<center>
		<form method="post" action="">
			<label for="jorang">Jumlah Orang :</label>
			<input type="number" name="jorang" placeholder="Jumlah Orang">
			<input type="submit" name="hitung" value="Hitung">
		</form>
		
		<?php
		if (isset($_POST['hitung'])) {
			$jorang = $_POST['jorang'];
			$i = 0;
			$salam = 0;
			for ($i=0; $i <$jorang ; $i++) { 
				$salam = $salam + $i;
			}
			echo "Jumlah Jabat Tangan Jika Ada ".$jorang." Orang Adalah ".$salam;
		}
		?> 
		</center>
	</body>
</html>