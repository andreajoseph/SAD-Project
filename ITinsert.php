<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("Itmanagement",$con);
$subject=$_POST['subject'];
$id=$_POST['id'];
$name=$_POST['sname'];
$r=mysql_query("select id,name,it1,it2,it3 from '".$subject."' where id=$id");
$row=mysql_fetch_array($r);
echo "Student Name: ".$row['name']."<br>";
echo "Roll no:".$row['rollno']."<br>";
echo "IT_1:".$row['it1']."<br>";
echo "IT_2:".$row['it2']."<br>";
echo "IT_3:".$row['it3']."<br>";
#echo "Average:".$row['average']."<br>";
?>