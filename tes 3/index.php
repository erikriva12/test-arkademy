<!DOCTYPE html>
<html>
<head>
	<title>
		Tes 3
	</title>
</head>
	<body>
		<?php
		$ukuran = 7;
		for($a=1; $a<=$ukuran; $a++){  //pf1
			for($b=1; $b<=$ukuran; $b++){  //pf2
				//echo "  ".$a.$b."  ";
				if ($a==1||$a==4||$a==7||$b==1||$b==7||$b==4){
					echo "&nbsp;*&nbsp;" ;
				}
	            else{
	            	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	            }
			}
			echo "<br/>";
		}
		?>
	</body>
</html>


