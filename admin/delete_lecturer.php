<?php
if (isset($_POST['id'])) {
    delete();
    echo $_POST['id'];
}
function delete(){
    include 'class/connect.php';
    $id = $_POST['id'];
     $qryname = mysqli_query($conn,"SELECT file FROM `lecturer` WHERE id=$id");
    $name=mysqli_fetch_assoc($qryname);
    $fileName=$name['image'];
	$del = "DELETE FROM `lecturer` WHERE id = $id";
    mysqli_query($conn,$del)or die(mysqli_error($conn));
    unlink("uploads" . $fileName);
}
  $GoTo = "lect.php";
  header(sprintf("Location: %s",$GoTo));
?>