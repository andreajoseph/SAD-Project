<?php
$con=mysql_connect("localhost","root","");
mysql_select_db('ITManagement',$con);
$subject=$_POST['Subject'];
$rollno=$_POST['Rollno'];
$name=$_POST['Name'];
$it1=$_POST['IT1Marks'];
$it2=$_POST['IT2Marks'];
$it3=$_POST['IT3Marks'];
$q=mysql_query("insert into '".$subject."'(rollno,name,it1,it2,it3) values($rollno,'".$name."',$it1,$it2,$it3)");
echo $rollno;
echo"<br>";
echo $name;
echo"<br>";
echo $it1;
echo"<br>";
echo $it2;
echo"<br>";
echo $it3;
echo"<br>";
?>