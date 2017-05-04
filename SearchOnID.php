<?php
$con=mysql_connect("localhost","root,"");
mysql_select_db("hospitalmanagement");
$ID=$_POST['ID'];
$sql="SELECT Name FROM doctor where ID=$ID;
echo .$sql.;
?>