<?php include 'admin_header.php'; ?>
<?php include 'admin_footer.php'; ?>
<?php include 'snav.php'; ?>
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>

	<title>Add Movie Review</title>
</head>
<body>
<form>
	<div style="height:00px;">
     <form method="post" enctype="multipart/form-data">
      <div class="content"><br>
  <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr><td colspan="7" align="center"></td></tr> 

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:#7180f5" align="center" class="bold">            
             <td class="bold" align="center" style="color:#D70A2F ">Movie Name</td><td align="center" style="color:#D70A2F ">Geners</td><td align="center" style="color:#D70A2F ">Year</td><td align="center" style="color:#D70A2F ">Cover</td></tr>            
<?php

$cn=mysqli_connect("localhost","root","","freshpop");
$s="select * from addmovie";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  
  while($data=mysqli_fetch_array($result))
      {
        echo"<tr>";
        echo "<td align='center' style='color:black'>";
        echo $data[1];
        echo"</td>";
        echo "<td align='center' style='color:black'>";
        echo $data[2];
        echo "</td>";
        echo "<td align='center' style='color:black'>";
        echo $data[3];
        echo "</td>";
        echo "<td>"; 
        ?> <img src="coverm/<?php echo $data[4]; ?>" height="100" width="100"> <?php echo "</td>";
        echo "</tr>";
      }
      mysqli_close($cn);

 ?>
</table>
</form>

</body>
</html>