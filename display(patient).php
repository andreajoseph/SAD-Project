<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hosman",$con);
$option=$_POST['option'];
$id=$_POST['id'];
$name=$_POST['sname'];
$r=mysql_query("select id,name,addr,cont,reason,adm_date,dis_date,room_no,cost from '".$option."' where id=$id");
$row=mysql_fetch_array($r);
echo "Patient Name: ".$row['name']."<br>";
echo "Patient ID:".$row['id']."<br>";
echo "Address:".$row['addr']."<br>";
echo "Contact number:".$row['cont']."<br>";
echo "Reason:".$row['reason']."<br>";
echo "Admission date:".$row['adm_date']."<br>";
echo "Discharge date:".$row['dis_date']."<br>";
echo "Room Number:".$row['room_no']."<br>";
echo "Total Cost:".$row['cost']."<br>";
#echo "Average:".$row['average']."<br>";
?>