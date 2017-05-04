<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hospitalmanagement");
$AppNo=$_POST['AppNo'];
$r="DELETE * FROM appointment where AppiontmentNumber=$AppNo";
if($r)
{
echo "Deletion Complete";
}
else
{
echo "Error.Please try again later";
}
?>