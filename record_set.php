<link rel="stylesheet" type="text/css" href="indexcss.css">
 <html>
<head>
<style>
body {
  background-image: url(BD.png);
}
</style>
</head>
<body>



 <div class="congo">

<?php

$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"covidr");
//$fname=$_GET["fname"];
//$lname=$_GET["lname"];
//$email=$_GET["email"];
//$city = $_GET["city"];
extract($_GET);
$rs = mysqli_query($conn,"select *from seeker where fname ='$fname' AND lname='$lname'");
if($rw =mysqli_fetch_row($rs))
{

?>

 <h1 class=" congo"> "User Already Exist"</h1>
<?php
}
else{
	$rs= mysqli_query($conn, "select * from seeker order by ID desc");
	$cd="";

	if($rw= mysqli_fetch_row($rs))
{
$cd1= $rw[5];
$cd1= substr($cd1,3);
$n= $cd1;
$n++;
if($n>=0&&$n<10)
$cd="SEK000".$n;

else if($n>=10&&$n<100)
$cd="SEK00".$n;

else if($n>=100&&$n<1000)
$cd="SEK0".$n;

else if($n>=1000&&$n<10000)
$cd="SEK".$n;
}
else 
{
	$cd= "SEK0001";
}




$qry= "insert into seeker values('$fname','$lname','$email','$city','$No','$cd','$pwd')";
mysqli_query($conn,$qry);

?> <strong><b>Congratulations!!</b> <center>
<h3 font= optima > You have sucessfully registerd for the donation </h1>
<h3> * Important</h1> <h3> Your Seeking ID is</h3><ul><?php  echo"$cd"; ?></ul>

<?php
}
?>



	<h4 align="center"><a href="index.html" id="linkwala" > Click here to go back to the home page</h1>
	

</div>
</body>
</html>