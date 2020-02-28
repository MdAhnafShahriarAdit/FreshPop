<?php include 'admin_header.php'; ?>
<?php include 'admin_footer.php'; ?>
<?php include 'snav.php'; ?>
<?php include 'db.php'; ?>
<style>
html,body{
background-image: url("image/img10.jpg");
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
  background: radial-gradient( circle 1086px at 1.1% 96.2%,  rgba(1,44,66,1) 0%, rgba(163,221,253,1) 53.6% );
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
	$s="delete from addmovie where name='" .$_POST["n1"] ."'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record delete');</script>";
}

?>

<form method="post">
<br>
<div class="absolute">	
<div class="flex-container">
  <div><h1>DELETE MOVIE</h1><br>
<tr><td class="lefttd"><h3>Select Name</h3></td><td><select name="n1" required><option value=""><h3>Select</h3></option>

<?php
$cn=makeconnection();
$s="select * from addmovie";
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
	$m_id=$data[0];
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