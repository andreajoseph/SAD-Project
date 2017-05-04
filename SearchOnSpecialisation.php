<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hospitalmanagement");
$specialisation=$_POST['specialisation'];
$sql="SELECT * FROM doctor";
if($result = mysql_query( $sql))
{
  while($row = mysql_fetch_array($result))
      {
          if($row['Specialisation']==$specialisation)
          {
             echo "<td>" . $row['Name'] . "</td>";
             echo "<br>";
           }
      }
}
?>
