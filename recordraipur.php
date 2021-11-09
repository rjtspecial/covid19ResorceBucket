<link  rel= "stylesheet" type= "text/css" href= "2nds.css")
<?php
$conn= mysqli_connect("localhost","root","");
mysqli_select_db( $conn, "covidr" );
extract($_GET);
$rs = mysqli_query($conn,"select *from table1 where City ='Raipur'");
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
<th>ID</th>
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
}
?>

</table>
</div>
<br>

<h6><b> Total Records =<?php echo $n; ?> Nos of record </b></h6>






