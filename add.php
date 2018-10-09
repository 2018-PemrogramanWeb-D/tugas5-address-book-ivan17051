<?php
	include("./init.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Tugas 5 PWeb</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<style>
			body {
				font-family: Calibri;
				background-color: #7FFFD4;
			}
			.container-fluid {
				margin-top: 200px auto;
				margin: 200px auto;
				width: 500px;
				border: 1px solid black;
				padding: 10px;
			}
			input{
				width: 100%;
				padding: 5px;
			}
	        button[type=submit]{
	        	margin-top: 10px;
	        }
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<form method="POST" action="address_book.php">
				<label for="name">Name</label>
				<input type="text" name="name" ><br>
				<label for="address">Address</label>
				<input type="address" name="address" ><br>
				<label for="telp">Telp. no</label>
				<input type="text" name="telp" ><br>
				<label for="email">E-mail</label>
				<input type="email" name="email" ><br>
				<button type="submit" class="btn btn-primary btn-md" name="add">Add</button>
				<button type="submit" class="btn btn-default">Close</button>
			</form>	
		</div>
		
				  


		
	

	</body>

</html>