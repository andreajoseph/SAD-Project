<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hospitalmanagement",$con);
if(! $con )
{
  die('Could not connect: ' . mysql_error());
}
$username= $_POST['username'];
$password= $_POST['password'];
$sql = "SELECT ID FROM table_name WHERE username='".$username."' and password='".$password."'";

$result = mysql_query($sql);
$r = mysql_fetch_array($result);

$count=mysql_num_rows($result);
if($count==1)
{
    
    
if($r[0]==1)
    
  header('location:Page1FINAL.html');
else if($r[0]==2)
  header("location :Page1FINAL.html");
else if($r[0]==2)
  header("location :Page1FINAL.html");
}
else 
{header("location :Page1FINAL.html");
   echo "<script type 'text/javascript'>alert('Invalid login');</script>";
}
?>

