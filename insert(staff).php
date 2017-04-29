<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hosman",$con);
$option=$_POST['option'];
$id=$_POST['id'];
$name=$_POST['name'];
$addr=$_POST['addr'];
$cont=$_POST['cont'];
$desg=$_POST['desg'];
$sal=$_POST['sal'];
$q=mysql_query("insert into '".$option."' (id,name,addr,cont,desg,sal) values('$rollno','".$name."','".$addr."','$cont','".$desg."','$sal')");
?>