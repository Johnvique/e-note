<?php
$username = $_POST['user'];
$phone = $_POST['phone'];
$identity= $_POST['id_no'];
$password = $_POST['pword'];


// connecting to server (server,username,password)
$connect = mysqli_connect("localhost","root","")or die(mysqli_error());

// testing if not connected
if (!$connect) {
	echo "Not connected";
}
else{
			// selecting to db
		mysqli_select_db($connect,"notice_reg");

		//  inserting the values from the html form
		$query = "INSERT INTO `register`(`user`, `phone`, `id_no`, `pword`) VALUES ('$username','$phone','$identity','$password')"; 

		// executing the insert above query
		$execute = mysqli_query($connect,$query)or die(mysqli_error($connect));

		// testing the execution
			if (!$execute) {
				mysqli_error($connect);
			}
			else{
				
				$select_query = "SELECT * FROM `register` WHERE `user`='$username' AND `id_no`='$identity' AND `pword`='$password'";
				$select_execute= mysqli_query($connect,$select_query)or die("select error");

				// looping thru the databse records
				while ($result = mysqli_fetch_array($select_execute)) {
					session_start();
					$_SESSION['username'] = $result['user'];
					$_SESSION['identity'] = $result['id_no'];

					header("Location:dashboard.php");
				}
			}

}
?>