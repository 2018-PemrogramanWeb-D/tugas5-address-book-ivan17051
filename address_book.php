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
			#add{
				width: 120px;
			}
			.container-fluid {
				margin-top: 200px auto;
				margin: 200px auto;
				width: 1000px;
			}
			button[type=submit]{
				width: 100%;
			}
	        table, th, td {
	        	width: 950px;
	            margin: 20px;
	            border: 1px solid black;
	            border-collapse: collapse;
	        }
	        th, td {
	            padding: 10px;
	            text-align: left;
	        }
	       th {
	            color: white;
	            background-color: black;
	        }
		</style>
	</head>
	<body>
		
		<div class="container-fluid">
			
			<form method="POST" action="add.php" id="add">
				<button type="submit" class="btn btn-primary btn-md">Add Contact</button>	
			</form>

		<?php
		if (isset($_POST['add'])) {
			$name = $_POST['name'];
			$address = $_POST['address'];
			$telp = $_POST['telp'];
			$email = $_POST['email'];
			$rowSel="SELECT * FROM myguests WHERE 
					name = '$name' 
					and address = '$address' 
					and telp = '$telp' 
					and email = '$email'";
			$check=mysqli_query($conn,$rowSel);
			if(mysqli_num_rows($check)> 0){
				echo " data already in table";
			}
			else{
				$insert = "INSERT INTO MyGuests (name, address, telp, email)
				VALUES ('$name', '$address', '$telp','$email')";
				if (mysqli_query($conn, $insert)) {
						echo "Data inserted successfully";
				} 
			}
		}
		$all= "select * from MyGuests";
		$data = mysqli_query($conn, $all);
		?>	
		
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Telp. No.</th>
					<th>E-mail</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php while($display = mysqli_fetch_assoc($data)){?>
				<tr>
					<td><?php echo $display['name']?></td>
					<td><?php echo $display['address']?></td>
					<td><?php echo $display['telp']?></td>
					<td><?php echo $display['email']?></td>
					<td>
						<form method="POST" action="edit.php">
							<input type="hidden" id="id" name="id" value="<?php echo $display['id']?>">
							<button type="submit" class="btn btn-info btn-xs">Edit</button>	
						</form>
						
						<form method="POST" action="">
							<input type="hidden" id="id" name="id" value="<?php echo $display['id']?>">
							<button type="submit" class="btn btn-danger btn-xs" name="delete">Delete</button>
						</form>
					</td>
				</tr>
			<?php } ?>	
			</tbody>
		</table>
		
		</div>
	    
		<?php
		if (isset($_POST['edit'])) {
			
			$id = $_POST['id'];
			$name = $_POST['name'];
			$address = $_POST['address'];
			$telp = $_POST['telp'];
			$email = $_POST['email'];
			$edit = "update myguests set 
					name = '$name',
					address = '$address',
					telp = '$telp',
					email = '$email'
					where id = '$id' ";
			if (mysqli_query($conn, $edit)) {
						echo "Data edited successfully";
				} 
		}
		?>
		<?php

		if (isset($_POST['delete'])) {
			
			$id = $_POST['id'];
			$delete =" delete from myguests where id = '$id' ";
			if (mysqli_query($conn, $delete)) {
						echo "Data deleted successfully";
				} 
		}
		?>
	

	</body>

</html>