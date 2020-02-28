<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html>

<style>
#mySidenav a {
  position: absolute;
  left: -140px;
  transition: 0.3s;
  padding: 15px;
  width: 210px;
  text-decoration: solid;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#home {
  top: 90px;
  background: linear-gradient(to right, #0066ff 20%, #660066 80%);
}

#dashbord {
  top: 155px;
  background: linear-gradient(to right, #0066ff 20%, #003366 80%);
}

#adduser {
  top: 220px;
  background: linear-gradient(to right, #0066ff 20%, #66ffff 80%);
}

#addreview {
  top: 285px;
  background: linear-gradient(to right, #0066ff 20%, #009933 80%);
}

#addmovie {
  top: 350px;
  background: linear-gradient(to right, #0066ff 20%, #ffff00 80%);
}

#addcomics {
  top: 415px;
  background: linear-gradient(to right, #0066ff 20%, #ff9900 80%);
}
#removemovie {
  top: 480px;
  background: linear-gradient(to right, #0066ff 20%, #ff0000 80%);
}
#removecomic {
  top: 545px;
  background: linear-gradient(to right, #0066ff 20%, #00ff00 80%);
}

#removeuser {
  top: 610px;
  background: linear-gradient(to right, #0066ff 20%, #ff99cc 80%);
}

#logout {
  top: 675px;
  background: linear-gradient(to right, #0066ff 20%, #666699 80%);
}
</style>

<body>

<div id="mySidenav" class="sidenav">
  <a href="admin_home.php" id="home">Home&emsp;&emsp;&emsp;&emsp;&emsp;<i class="fa fa-home" aria-hidden="true"></i></a>
  <a href="dashbord.php" id="dashbord">Dashbord&nbsp;&emsp;&emsp;&emsp;<i class="fas fa-tachometer-alt"></i></a>
  <a href="adduseradmin.php" id="adduser">Add User&emsp;&emsp;&emsp;&nbsp;&nbsp;<i class="fas fa-user-plus"></i></a>
  <a href="addreviewadmin.php" id="addreview">Add Review&emsp;&emsp;&nbsp;&nbsp;<i class="fas fa-plus-circle"></i></a>
  <a href="addmovie.php" id="addmovie">Add Movie&emsp;&emsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-film" aria-hidden="true"></i></a>
  <a href="addcomic.php" id="addcomics">Add Comics&emsp;&emsp;&nbsp;&nbsp;<i class="fas fa-puzzle-piece"></i></i></a>
  <a href="removemovie.php" id="removemovie">Remove Movie&emsp;&nbsp;<i class="fa fa-trash" aria-hidden="true"></i></a>
  <a href="removecomic.php" id="removecomic">Remove Comic&emsp;&nbsp;<i class="fas fa-eraser"></i></a>
  <a href="removeuser.php" id="removeuser">Remove User&emsp;&emsp;<i class="fa fa-ban" aria-hidden="true"></i></a>
  <a href="index.php" id="logout">Logout&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i></a>
 
</div>

</body>
</html> 
