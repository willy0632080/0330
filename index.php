<?php include("header.php"); ?>
<div class="container">

<?php include("menu.php"); ?>
<?php include("detabase.php");


$sql = "SELECT * FROM news";
$result = $conn->query($sql);

?>
<form action="addtitle.php" method ="POST">
  新聞標題<input type=txt size=40 name=title>
  <input type =submit value ="送出">  

</form>

<?php

if ($result->num_rows > 0) {
  echo "<table class='table table-success table-striped'>";
  echo "<tr><td>消息</td><td>張貼日期</td><td>管理</td></tr>";
  while($row = $result->fetch_assoc()) {
  	echo "<tr>";
	  	echo "<td>" . $row["title"]. "</td>";
	  	echo "<td>" . $row["created"]. "</td>";
      echo "<td><a class='btn btn-outline-info bth-sm'href='delete.php?target=" . $row["id"] . "'>刪除</a></td>";
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
