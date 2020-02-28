<?php include 'admin_header.php'; ?>
<?php include 'admin_footer.php'; ?>
<?php include 'snav.php'; ?>
<?php include 'db.php'; ?>

<style>
html,body{
background-image: url('image/img3.jpg');
background-size: cover;

}
.flex-container{
    padding: 0;
    margin: 0;
    list-style: none;
    top: 120px;
	display: flex;
	background-color: rgba(0,0,0, 0.5);
	justify-content: center;

}
.flex-container > div{ 
  background: linear-gradient(to right, #DECBA4, #3E5151); 
  margin: 25px;
  padding: 50px;
  font-size: 10px;
  text-align: center;

}
.button {
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  font-family: fantasy;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background: linear-gradient(to right, #ada996, #f2f2f2, #dbdbdb, #eaeaea); 
  color: black; 
  border: 2px solid #660066;
}

.button1:hover {
  background: linear-gradient(to right, #0066ff 20%, #660066 84%);
  color: white;
}
.button2 {
  background: linear-gradient(to right, #ada996, #f2f2f2, #dbdbdb, #eaeaea); 
  color: black; 
  border: 2px solid #660066;
}

.button2:hover {
  background: linear-gradient(to right, #0066ff 20%, #660066 84%);
  color: white;
}
</style>
<!DOCTYPE html>
<html>
<head>
  <title>Dashbord</title>
</head>
<body>
	<br><br><br><br><br>
<div class="absolute">	
<div class="flex-container">
  <div><h1>&nbsp;&nbsp;Total Users<i class="fa fa-users fa-4x" aria-hidden="true"></i></h1>
<?php

$cn=mysqli_connect("localhost","root","","freshpop");
$s="select count(u_id)
    from (user)";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  
  while($data=mysqli_fetch_array($result))
  {
        echo"<h2>$data[0]</h2>";
      }
      mysqli_close($cn);
      ?>
    <br>
     <a href="viewuser.php"><button class="button button1">View User</button></a>
  </div>
  <div><h1>Total Reviews<i class="fas fa-chart-area fa-4x"></i></h1> <br>
     </div>

</div>    
</div>
</body>
</html>




