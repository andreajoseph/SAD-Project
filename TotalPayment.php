<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hospitalmangement");
$id=$_POST['id'];
$c1="SELECT Cost FROM patient where ID=$id";
$c2="SELECT Paymentdue FROM patient where ID=$id";
$c3=$c1+$c2;
echo "Total cost is $c3";
?>