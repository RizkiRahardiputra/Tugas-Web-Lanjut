<!DOCTYPE html>
<html>
<head>
	<title> Perulangan</title>
</head>
<body>
	<form method="POST">
	<table>
		<tr>
			<td>Angka</td>
			<td><input type="text" name="angka"value=""></td>
		</tr>
		<tr>
			<td><input type="submit" name="send" value="send"></td>
		</tr>
	</table>
	</form>
</body>
</html>

<?php
echo "Soal Pola";
echo "<br>";

if (isset($_POST['send'])){
	$batas = $_POST['angka'];
	for ($i=1; $i <= $batas ; $i++) { 
		# code...
		echo "*";

		if ($i==1 || $i==$batas) {
			# code...
			for ($j=1; $j <= ($batas-2) ; $j++) { 
				# code...
				echo " *";
			}
		}

		else {
			for ($k=1; $k <=($batas-2) ; $k++) { 
				# code...
				echo "&nbsp&nbsp&nbsp";
			}
		}

		echo " *<br>";
	}
}
?>