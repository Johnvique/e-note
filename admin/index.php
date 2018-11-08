<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>e-notice (Login)</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form method="post" action="">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-block" >Login</button>
          </form>
          <?php 
          if(isset($_POST['login'])){
            login_exec();
          }
          function login_exec(){
            $email = $_POST['email'];
            $pass = $_POST['password'];

            include('class/connect.php');
            $qry = "SELECT * FROM `staff` WHERE `email` = '$email' AND `password`= '$pass'";
            $qry_exec = mysqli_query($conn,$qry)or die(mysqli_error($conn));
            if(mysqli_num_rows($qry_exec)== "1"){
              session_start();
              $res = mysqli_fetch_array($qry_exec)or die(mysqli_error($conn));
              $_SESSION['fname'] = $res['fname'];
              $_SESSION['email'] = $res['email'];
              $_SESSION['image'] = $res['image'];
              $_SESSION['pos'] = $res['position'];
              $_SESSION["member_id"] = $res['id'];
              $_SESSION['loggedin_time'] = time();
              header('Location:dashboard.php');
              exit();
            }
            
          }
          ?>
          <div class="text-center">
            <!-- <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
