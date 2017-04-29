<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hosman",$con);
$option=$_POST['option'];
$id=$_POST['id'];
$name=$_POST['sname'];
$r=mysql_query("select id,name,addr,cont,desg from '".$option."' where id=$id");
$row=mysql_fetch_array($r);
echo "Name: ".$row['name']."<br>";
echo "ID:".$row['id']."<br>";
echo "Address:".$row['addr']."<br>";
echo "Contact number:".$row['cont']."<br>";
echo "Designation:".$row[desg']."<br>";
?>