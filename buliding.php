<?php
	include("connMysqlObj.php");
	$sql_query = "SELECT * FROM building ORDER BY B_ID ASC";
	$result = $db_link->query($sql_query);
	$total_records = $result->num_rows;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset="UTF-8" />
<title>包裹管理系統</title>
</head>
<body>
<h1 align="center">包裹管理系統(棟)</h1>
<p align="center">目前資料筆數：<?php echo $total_records;?>，<a href="buliding_add.php">新增棟名</a>。</p>
<table border="1" align="center">
  <!-- 表格表頭 -->
  <tr>
    <th>編號</th>
    <th>棟名</th>
    <th>建立時間</th>
    <th>編輯時間</th>
    <th>刪除時間</th>
  </tr>
  <!-- 資料內容 -->
<?php
	while($row_result=$result->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$row_result["B_ID"]."</td>";
		echo "<td>".$row_result["B_name"]."</td>";
		echo "<td>".$row_result["Add_time"]."</td>";
		echo "<td>".$row_result["Edit_time"]."</td>";
		echo "<td>".$row_result["Del_time"]."</td>";
		echo "<td><a href='buliding_update.php?id=".$row_result["B_ID"]."'>修改</a> ";
		echo "<a href='buliding_delete.php?id=".$row_result["B_ID"]."'>刪除</a></td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>