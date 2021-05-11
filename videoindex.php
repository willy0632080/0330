<?php include("header.php"); ?>
<div class="container">

<?php include("menu.php"); ?>
<?php
include("detabase.php");

$sql = "SELECT * FROM video";
$result = $conn->query($sql);

?>

<?php

if ($result->num_rows > 0) {
  echo "<table class='table table-success table-striped'>";
  echo "<tr><td>影片名稱</td><td>張貼日期</td></tr>";
  while($row = $result->fetch_assoc()) {
  	echo "<tr>";
	  	echo "<td><a href='play.php?id=" . $row["id"] . "'>" . $row["title"]. "</a></td>";
	  	echo "<td>" . $row["created"]. "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>





</div>
<?php include("footer.php"); ?>



</body>
</html>