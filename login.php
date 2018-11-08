<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<style type="text/css"></style>
</head>
<body>
  <?php
include 'nav.php';
  ?>


<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xm-12">
			
		</div>
		<div class="col-md-4 col-sm-6 col-xm-12" style="margin-top: 1em">
			<div class="card-header text-white text-center bg-secondary">
             <h3>Login</h3></div>
      <form method="post" action="notice.php">
      <div class="form-group">
        <label for="choose">Choose</label>
        <select class="form-control" id="choose" name="select">
          <option class="dis" disabled selected>--Select Here--</option>
          <option value="student">Student</option>
          <option value="teachers">Staff</option>
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
      <p class="message">You don't have an account? <a href="register.php">Sign Up</a></p>
    </form>
		</div>
		<div class="col-md-4 col-sm-6 col-xm-12">
			
		</div>
	</div>
</div>
<footer class=" fixed-bottom bg-success">
  <div class="container">
    <div class="row">
      
      <div class="col-md-4 col-sm-6 col-xm-12">
        <h5 style="color: #000000"><u>Social</u></h5>
        <ul class="flex-center ul">
         <p class="fa fa-facebook-f" style="color: #FFFFFF">
            <a href="www.facebook.com/e-noticeapp/" class="text-blue">
            <span style="color: #FFFFFF"> Facebook</span>
            </a>
          </p><br>
          <p class="fa fa-instagram" style="color: #FFFFFF">
            <a href="www.instagram.com/e-noticeapp/" class="text-blue">
            <span style="color: #FFFFFF">Instagram</span>
            </a>
          </p><br>
          <p class="fa fa-twitter" style="color: #FFFFFF">
            <a href="www.twitter.com/e-noticeapp/" class="text-blue">
            <span style="color: #FFFFFF"> Twitter</span>
            </a>
          </p><br>
      </div>
    </div>
  </div>

      <div class="copy-right text-center" style="background-color: #01CC01">
                <hr style="margin: 0px;padding: 0px">
                    &copy; 2018 <a  target="_blank ">e-notice</a>. All Rights Reserved.
                </div>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mdb.js"></script>
</body>
</html>