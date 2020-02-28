<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<video autoplay muted loop id="myVideo">
  <source src="image/img2.mp4" type="video/mp4">
        </video>
        <form method="post" enctype="multipart/form-data">
        	<br><br><br>
		<div class="card">
			<div class="card-header">
				<h3 align="center">ADMIN LOGIN&nbsp;<i class="fa fa-lock" aria-hidden="true"></i></h3>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="t1" class="form-control" placeholder="USERNAME">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="t2" class="form-control" placeholder="PASSWORD">
					</div>
                    <br>
					<div class="form-group">
						<input type="submit" name="submit" value="LOGIN" class="btn float-right login_btn">
					</div>
				</form>
			</div>

				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<style>

html,body{
background-image: url("image/img2.mp4");
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.card-header h3{
color: white;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
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

#myVideo {
  position: fixed;
  top: 0;
  min-width: 100%;
  min-height: 100%;
}


</style>
<?php include 'db.php'; ?>

<?php

$_SESSION['donorstatus']="";

if(isset($_POST["submit"])) 
{
	
	$cn=makeconnection();			

			$s="select *from admin where username='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["username"]=$_POST["t1"];
       $_SESSION['donorstatus']="yes";

        echo "<script>location.replace('admin_home.php');</script>";
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
		}	
?> 
