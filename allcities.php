<?php
$conn= mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "covidr");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Covid-19 resorces under theto the seleced City  </title>
<link rel="stylesheet" type="text/css" href="2nds.css">

</head>
<body>
<form method="GET" action="allcities.php">
<label> Select the City where you want to search for resorces </label>
<select name = "city" class = "city" >
 <option value ="Bilaspur" class="city">Bilaspur</option>
    <option value ="Bhilai"  class="city">Bhilai</option>
    <option value ="Jagdalpur" class="city">Jagdalpur</option>
    <option value ="Raigarh" class="city">Raigarh</option>
    <option value ="Raipur" class="city">Raipur</option>
    <option value ="Rajnandgaon" class="city">Rajnandgaon</option>
  </select>
</select>
</form>
<?php
extract($_GET);

if($city= "Raipur")
{$rs = mysqli_query($conn," select *from table1 where City= 'Raipur' " );}

if($city= "Bilaspur")
{$rs = mysqli_query($conn," select *from table1 where City= 'Bilaspur' " );}

/*if($city= Bhilai)
{$rs = mysqli_query($conn," select *from table1 where City= 'Bhilai' " );}

if($city= 'Raigarh')
{$rs = mysqli_query($conn," select *from table1 where City= 'Raigarh' " );}

if($city= 'Jagdalpur')
{$rs = mysqli_query($conn," select *from table1 where City= 'Jagdalpur' " );}

if($city= 'Rajnandgaon')
{$rs = mysqli_query($conn," select *from table1 where City= 'Rajnandgaon' " );}
*/
  ?>

  <div class="table-wrapper">
<table class= "fl-table">
<tr>
	<th> First Name  </th>
<th> Last  Name  </th>
<th> Email </th>
<th>City</th>
<th>BloodGroup</th>
<th>Contact Number</th>
<?php
$n=0;
while ($rw=mysqli_fetch_row($rs))
{
$n++;
echo "<tr>";
echo "<td>".$rw[0];
echo "<td>".$rw[1];
echo "<td>".$rw[2];
echo "<td>".$rw[3];
echo "<td>".$rw[4];
echo "<td>".$rw[5];

}
?>

</table>
</div>
<br>

<h6><b> Total Records =<?php echo $n; ?> Nos of record </b></h6>

</body>
</html>