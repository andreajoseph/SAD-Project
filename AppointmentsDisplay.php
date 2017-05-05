<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hospitalmanagement",$con);
$sql="SELECT * FROM doctor";
if($result = mysql_query( $sql))
{
  while($row = mysql_fetch_array($result))
      {
          echo "<td>" . $row['AppointmentNumber'] . "</td>";
          echo "<td>" . $row['PatientNumber'] . "</td>";
          echo "<td>" . $row['DoctorNumber'] . "</td>";
          echo "<td>" . $row['Date'] . "</td>";
          echo "<td>" . $row['ReasonOfAppointment'] . "</td>";
          echo "<td>" . $row['Attended'] . "</td>";
          echo "<br>";
      }
}
?>
