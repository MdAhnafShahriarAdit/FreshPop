<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #000;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: #ffcf11;
  text-align: center;
  padding: 11px 23px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: #ff1e1e;
  color: #f9af00;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo"><img src="img/logo6.png" height="65" width="180" ; alt=""></a>
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href="">About Us</a>
    <a href="contactus.php">Contact US</a>
    <a href="ratings.php">Ratings</a>
    <a href="mem.php">Be a Pro Member </a>
    <a href="admin/signup.php">Sign Up/Sign In</a>
    <a href="admin/ulogin.php">Log Out</a>
  </div>
</div>

<div style="padding-left:20px">
 
</div>

</body>
</html>
