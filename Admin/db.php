<?php
function makeconnection()
{
  $cn=mysqli_connect("localhost","root","","freshpop");
  if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  return $cn;
}

?>