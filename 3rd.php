<?php
$conn= msqli_connect("localhost" ,"root","");
mysqli_select_db($conn,"covidr")
$rs =mysqli_query($conn,"select *from table1");

?>

<html>	
<head>
<link rel="stylesheet" type="text/css" href="2nds.css"> 

<title>@BY</title>
</head>
<body id= "background">
<h1 class="head1"> <b>Welcome to Digital  Covid19 Resource Bucket</b></h1>
<form method = get action= actionpage.php >
<div class="div2" >

<label for="fname" > <b>Name:</b></label>
  <input type="text" name="fname" size="30" placeholder="First name">
  <label for="lname" ></label>
  <input type="text"  name="lname"size="30" placeholder="Last name">
  <br>

  <label for="email"><b>Email:</b></label>
  <input type="email" name= "email" size="30" placeholder="email">
  <br> 

      <label for= "city" ><b>Select the city:</b></label> 
  
    <select class= " select"   required>
    
     <option value="Raipur" > Raipur</option>
     <option value="Durg"> Durg</option>
     <option value="Bhilai "> Bhilai </option>
     <option value="Bilaspur"> Bilaspur </option>
     <option value="Rajnandgaon"> Rajnandgaon </option>
     <option value="Raigarh"> Raigarh</option>
     <option value="jagdalpur ">jagdalpur</option>
  </select>
  


  <br> <br>
  <input type="submit" class="button" value="Register ">
</div>

  <div class ="div1" > Hey guys we all know how much we all are suffering from this pendemic,<br> so this is a basic initiative to bring all the peeps closer to each other so ,that we can help every needed ones, thank You .</div>
  <br>
  <br>

  <div class= "d3">
   <b> Which kind of Information do you want:</b>
    <ul>
    <li><a href="https://cg.nic.in/health/covid19/RTPBedAvailable.aspx"> Click for checking the bed availablity </a></li>
    <li> <a href="http://raipurambulanceservice.com/"> Click here for getting connectedd with ambulance support</a></li>


</ul>
</div>
<table border= 1px>
  <th bgcolor="yellow" font-color= white >Report </th>
  <table border= 2px>
  <th> Full Name </th>
  <th>Last Name </th>
  

</table>


</body>
</html>
