<html>
<head>
	<title>
		</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<style type="text/css">
body{
	background-color: #999999;
	overflow-x: hidden;
}
.nav-link{
	color: black;
}
.ul{
	list-style-type: none;
}
.ul li{
	display: inline;
	padding-bottom: 10px;
}
.social{
display: none;
margin-right: 20px;

}
.social a{
	color: black;
	
}

</style>



</head>
<body>
	<?php
include 'nav.php';

	?>
	<div class="row">
	
	<div class="col-md-4">
	</div>
<div class="col-md-4">
		<div class="card flex-center" style="margin-top: 4em">
			<div class="card-body">
				<div class="card-header text-success text-center bg-default">
					<h3><strong><i>SIGN UP</i></strong></h3></div>
					<form method="post" action="reg.php">
				<div class="form-group">
				<label for="Username">Username</label>
				<input type="text" name="user" class="form-control" id="Username" required="">
			</div>

				<div class="form-group">
				<label for="id_no">ID No.</label>
				<input type="text" name="id_no" class="form-control" id="id_no" required="">
			</div>


				<div class="form-group">
				<label for="phone">Phone Number</label>
				<input type="text" name="phone" class="form-control" id="phone" required="">
			</div>


				<div class="form-group">
				<label for="Pass">Password</label>
				<input type="password" name="pword" class="form-control" id="Pass" required="">
			</div>

<button type="reset" class="btn btn-danger">Cancel</button>
<button type="submit" class="btn btn-success">Submit</button>
<p class="message">Already a member? <a href="portal.php">Login</a></p>
</form>

				</div>
			</div>
		</div>

	<div class="col-md-4">
		
	</div>

	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mdb.js"></script>
</body>
</html>