<?php include 'admin_header.php'; ?>
<?php include 'admin_footer.php'; ?>
<?php include 'snav.php'; ?>
<?php include 'db.php'; ?>
<style>
	
html,body{
background-image: url("image/img8.jpg");
background-size: cover;
}
.container{
height: 100%;
align-content: center;
}

.card{
align-content: center;
height: 400px;
margin-top: auto;
margin-bottom: auto;
width: 500px;
background-color: rgba(0,0,0,0.5) !important;
}

.card-header h2{
color: white;
}

.input-group-prepend span{
width: 110px;
height: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
font-family: fantasy;
}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

</style>

<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
</head>
<body>
	<br>
	<form method="post" enctype="multipart/form-data" >
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h2 align="center">ADD USER</h2>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i>&nbsp;&nbsp;User Name:</span>
						</div>
						<input type="text" name="n1" class="form-control" placeholder="Enter username">	
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Email:</span>
						</div>
						<input type="email" name="n2" class="form-control" placeholder="Enter valid Email">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i>&nbsp;&nbsp;Passeord:</span>
						</div>
						<input type="password" name="n3" class="form-control" placeholder="Enter password">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="ADD" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST["submit"])) 
{
		$cn=makeconnection();
			$s="insert into user(username,email,pwd) values('" . $_POST["n1"] ."','" . $_POST["n2"] . "','" . $_POST["n3"] ."')";
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
  {
  echo "<script>location.replace('adduseradmin.php');</script>";
  }
  else
  {echo "<script>alert('Saving Record Failed');</script>";
  }
    
    } 

?> 