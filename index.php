<?php
  
$conn=mysqli_connect("localhost","root","");
  mysqli_select_db($conn,"covidr");

$s = $_GET["abc"];
if(strcmp($s,"")!= 0)
{
  if(strcmp($s,"inv")==0)
    echo "<font  color= red>Invalid Login Info !!</font>";
if(strcmp($s, "out")==0)
    echo "<font color= red>You have sucessfully Logged Out !!</font>";
}


  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Welcome To Covid19 Resource Bucket </title>
	<link rel="stylesheet" type="text/css" href="indexcss.css">

</head>
<body id="back">
<div class=" upper-part ">
	<div id="head1"><b>Welcome to Digital  Covid19 Resource Bucket</b></h1></div>

<form method = get action= loginsession.php >

<div class="login-wrap">
  <h2>Login to seek , who can help you!</h2>
  
  <div class="form">
    <input type="text" placeholder="ID" name="id" size=25 />
    <input type="password" placeholder="Password" name="pw" size=25 />
    <button class="alpha" > Login </button>
   <div class="register"> <a href="indexlogin1.html"> <p> Don't have an account? Register </p></a>
    <a href="2nd.html"> <p> Signup for volunter/assist the required one</p></a>
 </div>
  </div>
</div>

</body>
</html>