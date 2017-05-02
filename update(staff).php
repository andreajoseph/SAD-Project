<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hosman",$con);
$id=$_POST['id'];
$option=$_POST['option'];
$desg=$_POST['desg'];
$addr=$_POST['addr'];
$sal=$_POST['sal'];
$r=mysql_query("update '".$option."' set desg='".$desg."',addr='".$addr."',sal='$sal' where id=$id");
if($r)
{
echo "Updation successful";
}
else
{
echo "There was an error.Please try again";
}
?>