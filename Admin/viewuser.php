<?php include 'admin_header.php'; ?>
<?php include 'admin_footer.php'; ?>
<?php include 'snav.php'; ?>
<?php include 'db.php'; ?>
<html>
<head>
<style>

html,body{
background-image: url("image/img2.jpg");
background-size: cover;
}
</style>

	<title>View User</title>

</head>
<body>
<div style="height:00px;">
     <form method="post" enctype="multipart/form-data">
      <div class="content"><br>
  <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr><td colspan="7" align="center"></td></tr> 

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:#7180f5" align="center" class="bold">            
             <td class="bold" align="center" style="color:#D70A2F " >Username</td><td align="center" style="color:#D70A2F ">Email</td></tr>            
<?php

$cn=mysqli_connect("localhost","root","","freshpop");
$s="select * from user";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  
  while($data=mysqli_fetch_array($result))
      {
        echo"<tr><td align='center' style='color:white'>$data[1]</td><td align='center' style='color:white'>$data[2]</td></tr>";
      }
      mysqli_close($cn);

 ?>

</table>
</div>
</form>
</div>
</body>
</html>
