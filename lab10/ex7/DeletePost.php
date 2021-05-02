<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "karenliu", "Xaic3ohd", "karenliu");
if ($mysqli->connect_errno){
  printf("Connect failed:%s\n", $mysqli->connect_error);
  exit();
}
  $new = "SELECT * FROM Posts ";
  $result = $mysqli->query($new);
  while($row = $result->fetch_assoc()) {
    $postId = $row['post_Id'];
    if(isset($_POST[$postId]) == true){
      $delete = "DELETE FROM Posts WHERE post_Id = $postId";
      if ($mysqli->query($delete) === TRUE) {
        echo "Post deleted. <br>";
      } else {
        echo "Error while deleting: " . $conn->error;
      }
    }
  }
?>
