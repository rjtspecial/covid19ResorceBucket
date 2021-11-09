<?php
session_start();
$e_id= $_SESSION['uid'];
if(strcmp($e_id ,"")==0)
{

	echo " Please Come with Proper Singup/Login";

}
else
{ 
$nm = $_SESSION['unm'];

echo " <center> Welcome..<b>$nm</b>( $e_id)";

}


?>
<?php
$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"covidr");
?>
<?php
$ra =mysqli_query($conn,"select *from table1");
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
while ($rm=mysqli_fetch_row($ra))
{
$n++;
echo "<tr>";
echo "<td>".$rm[0];
echo "<td>".$rm[1];
echo "<td>".$rm[2];
echo "<td>".$rm[3];
echo "<td>".$rm[4];
echo "<td>".$rm[5];
echo "<td>".$rm[6];
echo "<td>".$rm[7];
}
?>

</table>
</div>
<br>

<h6><b> Total Records =<?php echo $n; ?> Nos of record </b></h6>

<li> <a href="recordraipur.php">  Click Here to see the registerd User for volunteering (Specifically in RAIPUR) </a> </i></li>
<li> <a href="bhilai.php">  Click Here to see the registerd User for volunteering (Specifically in Bhilai ) </a> </i></div></li>
<?php
	
echo " <button><a href=logout.php >Signout </a>";

	?>