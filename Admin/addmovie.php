
<?php include 'admin_header.php'; ?>
<?php include 'admin_footer.php'; ?>
<?php include 'snav.php'; ?>
<?php include 'db.php'; ?>
<style>
	
html,body{
background-image: url("image/img1.jpg");
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
width: 100px;
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
	<title>Add Movie</title>
</head>
<body>
	<br>
	<form method="post" enctype="multipart/form-data" >
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h2 align="center">ADD MOVIE</h2>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Movie Name:</span>
						</div>
						<input type="text" name="n1" class="form-control" placeholder="Enter movie name">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Genres:</span>
						</div>
						<input type="text" name="n2" class="form-control" placeholder="Enter movie genres">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Year:</span>
						</div>
						<input type="text" name="n3" class="form-control" placeholder="Enter release year">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Cover:</span>
						</div>
						<input type="file" name="image" class="form-control" placeholder="Enter movie cover">
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
$target_dir = "coverm/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }
     else
    {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) 
{
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
//aloow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}
	else
	{
		if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
		$cn=makeconnection();
			$s="insert into addmovie(name,genres,year,cover) values('" . $_POST["n1"] ."','" . $_POST["n2"] . "','" . $_POST["n3"] . "','" . basename($_FILES["image"]["name"])  ."')";
			
	mysqli_query($cn,$s);
	mysqli_close($cn);
	if($s>0)
	{
	echo "<script>location.replace('addmovie.php');</script>";
	}
	else
	{echo "<script>location.replace('addmovie.php');</script>";
	}
		} else{
			echo "sorry there was an error uploading your file.";
		}	
	
	}
}
?>