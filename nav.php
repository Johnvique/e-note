<!DOCTYPE html>
<html>
<head>
	<title>nav</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
    body{
    background-color:
}
.nav-link{
    color: blue;
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
    color: white;
    
} 
  </style>
</head>
<body>
	
    <nav class="navbar navbar-expand-lg bg-success">
        <em><a class="navbar-brand  text-white" href="#">
  <h2 style="font-weight:bold;"><span style="color: #FFFFFF">e-notice</h2></a></em>
    <div class="navbar-brand">
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a href="Home.php" class="nav-link">Home</a><br>
            </li>
             <div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Notices
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="login.php">Sign in here</a>
    <div class="dropdown-divider"></div>

  </div>
</div>

  </div>
        </ul>
    </div>
        </form>
    </div>
</nav>

</body>
</html>