<link rel="stylesheet" type="text/css" href="2nds.css">
 
<?php

$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"covidr");
//$fname=$_GET["fname"];
//$lname=$_GET["lname"];
//$email=$_GET["email"];
//$city = $_GET["city"];
extract($_GET);
$rs = mysqli_query($conn,"select *from table1 where fullname ='$fname' AND lastname='$lname'");
if($rw =mysqli_fetch_row($rs))
{

?>

 <h1 class=" congo"> "User Already Exist"</h1>
<?php
}
else{
	$rs= mysqli_query($conn, "select * from table1 order by ID desc");
	$cd="";

	if($rw= mysqli_fetch_row($rs))
{
$cd1= $rw[6];
$cd1= substr($cd1,3);
$n= $cd1;
$n++;
if($n>=0&&$n<10)
$cd="COV000".$n;

else if($n>=10&&$n<100)
$cd="COV00".$n;

else if($n>=100&&$n<1000)
$cd="COV0".$n;

else if($n>=1000&&$n<10000)
$cd="COV".$n;
}
else 
{
	$cd= "COV0001";
}




$qry= "insert into table1 values('$fname','$lname','$email','$city','$bloodgrp ','$No','$cd','$res')";
mysqli_query($conn,$qry);

?><div class="congo"> <strong><b>Congratulations!!</b> <center>
<h1 font= "Courier New"> You have sucessfully registerd for the donation </h1>


</a>
<?php
}
?>

<hr>
<div >
	<h1 align="center"><a href="2nd.html" id="linkwala" > Click here to go back to the home page</h1>

</div>