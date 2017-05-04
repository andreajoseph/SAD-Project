<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hospitalmanagement");
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT ID FROM table_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$count=mysql_num_rows($result);
if($count==1)
  header("location :Page1Final.html");
else
   echo "<script type 'text/javascript'>alert('Invalid login);</script";
?>