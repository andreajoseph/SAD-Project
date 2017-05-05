<?php
$con=mysqli_select("localhost","root","","hospitalmanagement");
$name=$_POST['name'];
$amount=$_POST['amount'];
$query="update into donation(Name,Amount) values('".$name."','$amount')";
$r=mysql_query($con,$query);
if($r)
echo "Donation Sucessful";
else
echo "Donation Unsucessful";
?>
