<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "karenliu", "Xaic3ohd", "karenliu");
if ($mysqli->connect_errno){
  printf("Connect failed:%s\n", $mysqli->connect_error);
  exit();
}
$new = "SELECT * FROM Users";
$result = $mysqli->query($new);
echo "<table>
  <tr>
    <th>ID</th>
  </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["user_Id"]."</td></tr>";
  }
  echo "</table>";
$mysqli->close();
?>
