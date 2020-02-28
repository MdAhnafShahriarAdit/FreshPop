<?php include 'admin_header.php'; ?>
<?php include 'admin_footer.php'; ?>
<?php include 'snav.php'; ?>
<?php include 'db.php'; ?>
<style>
html,body{
background-image: url("image/img6.jpg");
background-size: cover;

}
.flex-container{
    padding: 0;
    margin: 0;
    list-style: none;
    top: 120px;
	display: flex;
	background-color: rgba(0,0,0,0.1);
	justify-content: center;

}
.flex-container > div{ 
  background: linear-gradient( 122.3deg,  rgba(111,71,133,1) 14.6%, rgba(232,129,166,1) 29.6%, rgba(237,237,183,1) 42.1%, rgba(244,166,215,1) 56.7%, rgba(154,219,232,1) 68.7%, rgba(238,226,159,1) 84.8% );
  margin: 25px;
  padding: 50px;
  font-size: 10px;
  text-align: center;

}
</style>
<?php
if(isset($_POST["submit"]))
{
	$cn=makeconnection();
	$s="delete from addcomic where name='" .$_POST["n1"] ."'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record delete');</script>";
}

?>

<form method="post">
<br>
<div class="absolute">	
<div class="flex-container">
  <div><h1>DELETE COMIC</h1><br>
<tr><td class="lefttd"><h3>Select Name</h3></td><td><select name="n1" required><option value=""><h3>Select</h3></option>

<?php
$cn=makeconnection();
$s="select * from addcomic";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);

	while($data=mysqli_fetch_array($result))
	{
			echo "<option value=$data[1]>$data[1]</option>";
	}
	mysqli_close($cn);

?>

</select>

<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from addcomic where name='" .$_POST["n1"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	$data=mysqli_fetch_array($result);
	$c_id=$data[0];
	$name=$data[1];
	$genres=$data[2];
	$year=$data[3];
	$cover=$data[4];
	mysqli_close($cn);
}
?>

</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="DELETE" name="submit"></td></tr>
</table>
</form>
       </div>

   </div>
    </center>