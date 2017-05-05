<?php
$con=mysql_query("localhost","root","");
mysql_select_database("hospitalmanagement",$con);
$sql="SELECT * FROM donation";
if($result = mysql_query( $sql))
{
  while($row = mysql_fetch_array($result))
      {
          echo "<td>" . $row['Name'] . "</td>";
          echo "<td>" . $row['Amount'] . "</td>";
      }
}
?>
 //Display in form of a table. And background.