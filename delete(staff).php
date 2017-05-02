<?php 
$con=mysql_connect("localhost","root",""); 
mysql_select_db("hosman",$con); 
$id=$_POST['id']; 
$r=mysql_query("delete from other_staff where id=$id"); 
if($r) 
{ 
echo "Deletion successful"; 
} 
else 
{ 
echo "There was an error.Please try again"; 
} 
?> 
