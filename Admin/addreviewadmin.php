<?php include 'admin_header.php'; ?>
<?php include 'admin_footer.php'; ?>
<?php include 'snav.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add review</title>
</head>
<body>
	<div class="bg-text">
<div><a href="moviereview.php"><button class="button button1">Movie Review</button></a></div>
<br>
<div><a href="comicreview.php"><button class="button button2">Comic Review</button></a></div>
</div>
</body>
</html>
<style>
html,body{
background-image: url('image/img4.jpg');
background-size: cover;

}
.button1 {
  background: linear-gradient(to right, #ada996, #f2f2f2, #dbdbdb, #eaeaea); 
  color: black; 
  border: 1px solid #660066;
}

.button1:hover {
  background: linear-gradient(to right, #0066ff 20%, #660066 84%);
  color: white;
}
.button2 {
  background: linear-gradient(to right, #ada996, #f2f2f2, #dbdbdb, #eaeaea); 
  color: black; 
  border: 1px solid #660066;
}

.button2:hover {
  background: linear-gradient(to right, #0066ff 20%, #660066 84%);
  color: white;
}
.bg-text 
{
  background-color: rgba(0,0,0, 0.5); 
  color: #A9A9A9;
  font-weight: bold;
  font-family: fantasy;
  font-size: 50px;
  border: 10px solid ;
  border-color: darkblue;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 450px;
  padding: 20px;
  text-align: center;
  animation-delay: 10s;
}
</style>