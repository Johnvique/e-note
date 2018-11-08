<!DOCTYPE html>
<html>
<head>
	<title>School Notices</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		body{
			background-color: #999999; 
		}
	</style>
</head>
<body>
<?php
include 'nav.php';
?>


<div class="container">
    <div class="row" style="margin-top: 2em;">
          <!-- Upcomimg Events -->
<section class="events container">
   <div class="row">
    <div class="col-md-6">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Upcoming Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Downloads</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Important</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row" style="margin-top:2em;">
              <div class="col-md-3">
                  <div class="card-body bg-success" style="border-radius:33%;height: 78px;">
                    <p class="text-white">Past Event</p>
                  </div>
              </div>
              <div class="col-md-9">
                  <h4>Meru University Freshers Bash</h4>
                  <p class="text-muted">Venue:Multi-purpose Hall</p>
              </div>
            </div>
            <div class="row" style="margin-top:2em;">
              <div class="col-md-3">
                  <div class="card-body bg-success" style="border-radius:33%;height: 78px;">
                    <p class="text-white">On Going</p>
                  </div>
              </div>
              <div class="col-md-9">
                  <h4>Innovators Club Hackathon</h4>
                  <p class="text-muted">Venue:Innovation Centre</p>
              </div>
            </div>
<div class="row" style="margin-top:2em">
              <div class="col-md-3">
                  <div class="card-body bg-success" style="border-radius:33%;height: 78px;">
                    <p class="text-white">2nd-4th August</p>
                </div>
            </div>
  <div class="col-md-9">
                  <h4>Christian Union Prayers</h4>
                  <p class="text-muted">School Graduation Garden</p>
              </div>
            </div>

          </div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <ul class="list-group">
              <li class="list-group-item bg-info text-white" style="margin-top:2em"><a href="downloads.html" class="text-white">Examination Timetable<span class="float-right"><i class="fa fa-download"></i></span></a></li>
              <li class="list-group-item bg-info text-white" style="margin-top:2em"><a href="downloads.html" class="text-white">Student Pass List <span class="float-right"><i class="fa fa-download"></i></span></a></li>
              <li class="list-group-item bg-info text-white" style="margin-top:2em"><a href="downloads.html" class="text-white">School Academic Clubs<span class="float-right"><i class="fa fa-download"></i></span></a></li>
              <li class="list-group-item bg-info text-white" style="margin-top:2em"><a href="downloads.html" class="text-white">Sport Activities<span class="float-right"><i class="fa fa-download"></i></span></a></li>
              
            </ul>
          </div>
          <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <div class="Important container text-center">
              <h4>
              Internal Memo
              </h4>
              <div class="card"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p></div>
              <h4>
              Hostel Booking
              </h4>
              <div class="card"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.<p></div>
              <h4>
              Student Biometric
              </h4>
              <div class="card"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p></div>
             </div>
          </div>
       </div>
    </div>
</div>
    <p ><img src="imgs/Education/2.png" class="img-fluid" style="margin-left: 5"></p>


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