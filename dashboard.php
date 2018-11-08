<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		
	</style>
</head>
<body>
	<?php
	session_start();
	if (isset($_SESSION['user'])) {
		$username=$_SESSION['user'];
		$identity=$_SESSION['id_no'];
	}
	?>

	<div class="jumbotron">
		<h2>Welcome <?php echo $_SESSION['username']?></h2>

		<?php
		include 'conn.php';
		?>

		<div class="container">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>User</th>
						<th>phone</th>
						<th>id_no</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query="SELECT * FROM `register`";
					$execute_query=mysqli_query($connect,$query) or die(mysqli_error($connect));
					while ($result=mysqli_fetch_Array($execute_query)) {
						?>
					
					<tr>
					<td><?php echo $result['user'] ?></td>
					<td><?php echo $result['phone'] ?></td>
					<td><?php echo $result['id_no'] ?></td>
					<?php
				}

					?>
				</tr>
			</tbody>
		</table>
	</div>


</body>
</html>