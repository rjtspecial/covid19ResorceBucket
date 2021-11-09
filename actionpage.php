<?php
$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"covidr");
?>

<?php
$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"covidr");
?>
<?php
$rs =mysqli_query($conn,"select *from table1");
?>
<link rel="stylesheet" type="text/css" href="2nds.css">

<div class="table-wrapper">
<table class= "fl-table">
<tr>
	<th> First Name  </th>
<th> Last  Name  </th>
<th> Email </th>
<th>City</th>
<th>BloodGroup</th>
<th>ContactNumber</th>
<th> ID</th>
<th> Resource/Lead</th>
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
echo "<td>".$rw[6];
echo "<td>".$rw[7];
}
?>

</table>
</div>
<br>

<h6><b> Total Records =<?php echo $n; ?> Nos of record </b></h6>
<div class= "div2">
	<h1><a href="2nd.html"> Click here to go back to the home page</h1>

</div>
