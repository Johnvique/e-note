<!DOCTYPE html>
<html>
<head>
	<title>school portal</title>
	    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.min.css/"/>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <style type="text/css">
    	body{
    		overflow-x: hidden;
    		overflow-y: scroll;
    	}
    </style>
</head>
<body>
	<div class="jumbotron bg-success text-white text-center">
		<h1>e-notice</h1>
	</div>
<div class="row " style="margin-top: 2em;">
	<div class="col-md-4"> 
	</div>
	<div class="col-md-4 card">
		<div class="card-body">
			<div class="card-header text-center">
				<h4 style="font-weight: bold;" class="text-success">Login To Portal</h4>
			</div>

		<form method="post" action="">
			<div class="form-group">
				<label for="choose">Choose</label>
				<select class="form-control" id="choose" name="select">
					<option class="dis" disabled selected>--Select Here--</option>
					<option value="student">Student</option>
					<option value="teachers">Teacher</option>
				</select>
			</div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">ID No.</label>
		    <input type="text" class="form-control" name="id_no" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID No.">
		   
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-success" name="submit">Submit</button>
		  <p class="message">You don't have an account? <a href="register.html">Sign Up</a></p>
		</form>
	</div>
	</div>
	<div class="col-md-4">
		<!--  -->
	</div>
</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mdb.js"></script>
</html>