<?php 
session_start();
$conn=mysqli_connect("localhost","root","");
  mysqli_select_db($conn,"covidr");
  extract($_GET);
  $rs = mysqli_query($conn, " select * from seeker where ID='$id' and password='$pw'");
  if($rw = mysqli_fetch_row($rs))
  {

$_SESSION['uid']= $id ;
$_SESSION['unm'] = $rw[0];


header("Location:login3.php");
}
else {

  header("Location:index.php?abc=inv");
  }
  ?>

