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
echo "Soal Piramida";
echo "<br>";
if (isset ($_POST['send'])) {
	# code...
	$batas = $_POST['angka'];
	for ($i=1; $i <=$batas ; $i++) { 
		# code...
		for ($j=1; $j <= $i ; $j++) { 
			# code...
			echo $j;

		}

		echo "<br>";
	}
}
?>