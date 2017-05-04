<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hospitalmanagement");
$AppNo=$_POST['AppNo'];
$date=$_POST['date'];
$docno=$_POST['docno'];
$sql="INSERT into appointment(AppointmentNumber,Date,DoctorNumber) values($AppNo,$date,$docno)";
if($sql)
{
echo "Appointment allocated";
}
else
{
echo "Error.Try again later";
}
?>
