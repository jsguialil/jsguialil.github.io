<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>Lecture</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
	</head>
	<body>
	<?php
		require_once ("connection.php");

		$getData = $conn->query("SELECT * FROM account") or die(mysqli_error());
		$data = $getData->fetch_array();
		// var_dump($data);
		?>
		<form method="post">
			<table>
			<center>
			
			<h3> How to save inputted data to your database </h3>
			Identification No.: <input type="text" id="idNo" name="idNo"> <br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name: <input type="text" id="name" name="name"> <br><br>
			
			</center>
			</table>
		</form>

</body>
</html>