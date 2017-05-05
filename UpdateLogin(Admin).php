<?php
$con=mysqli_connect("localhost","root","","hospitalmangement");
$name=$_POST['name'];
$id=$_POST['id'];
$query="update into donation(Name,ID) values('".$name."','$id')";
$r=mysql_query($con,$query);
if($r)
echo "Updation Sucessful";
else
echo "Updation Unsucessful";
?>