<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("hospitalmanagement");
$name=$_POST['name'];
$sql="SELECT * FROM doctor";
if($result = mysql_query( $sql))
{
  while($row = mysql_fetch_array($result))
      {
          if($row['Name']==$name)
          {
             echo "<td>" . $row['Name'] . "</td>";
             echo "<br>";
           }
      }
}
?>
