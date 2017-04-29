<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hosman",$con);
$option=$_POST['option'];
$id=$_POST['id'];
$name=$_POST['name'];
$addr=$_POST['addr'];
$cont=$_POST['cont'];
$reason=$_POST['reason'];
$adm_date=$_POST['adm_date'];
$dis_date=$_POST['dis_date'];
$room_no=$_POST['room_no'];
$cost=$_POST['cost'];
$q=mysql_query("insert into '".$option."' (id,name,addr,cont,reason,adm_date,dis_date,room_no,cost) values('$rollno','".$name."','".$addr."','$cont','".$reason."','".$adm_date.",'".$dis_date.",'$room_no','$cost')");
?>