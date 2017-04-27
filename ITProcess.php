<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("Itmanagement",$con);
$subject=$_POST['subject'];
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$it1=$_POST['it1'];
$it2=$_POST['it2'];
$it3=$_POST['it3'];
$q=mysql_query("insert into '".$subject."' (rollno,name,it1,it2,it3) values('$rollno','".$name."','$it1','$it2','$it3')");
?>