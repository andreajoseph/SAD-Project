<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hosman",$con);
$id=$_POST['id'];
$option=$_POST['option'];
$r=mysql_query("delete from '".$option."' where id=$id");
if($r)
{
echo "Deletion successful";
}
else
{
echo "There was an error.Please try again";
}
?>