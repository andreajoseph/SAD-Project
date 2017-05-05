<?php
$con=mysql_query("localhost","root","");
mysql_select_database("hospitalmanagement",$con);
$docno=$_POST['id'];
$sql="SELECT * FROM appointment";
if($result = mysql_query($sql))
{
  while($row = mysql_fetch_array($result))
      {
        if($row['DoctorNumber']==$docn0)
         {
          echo "<td>" . $row['AppointmentNumber'] . "</td>";
          echo "<td>" . $row['PatientNumber'] . "</td>";
          echo "<td>" . $row['Date'] . "</td>";
          echo "<td>" . $row['ReasonOfAppointment'] . "</td>";
          echo "<br>";
         }
      }
}
?>
 //Display in form of a table. And background.