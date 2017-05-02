<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hosman",$con);
$id=$_POST['id'];
$option=$_POST['option'];
$addr=$_POST['addr'];
$cost=$_POST['cost'];
$r=mysql_query("update '".$option."' set addr='".$addr."',cost='".$cost."' where id=$id");
if($r)
{
echo "Updation successful";
}
else
{
echo "There was an error.Please try again";
}
?>