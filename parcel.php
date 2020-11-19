<?php
	include("connMysqlObj.php");
	$sql_query = "SELECT * FROM parcels ORDER BY P_ID ASC";
	$result = $db_link->query($sql_query);
	$total_records = $result->num_rows;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>包裹簽收系統</title>
</head>
<body>
<h1 align="center">包裹管理系統(包裹)</h1>
<p align="center"><a href="address.php">包裹簽收系統(住址)</a></p>
<p align="center"><a href="tenants.php">包裹簽收系統(住戶)</a></p>
<p align="center"><a href="building.php">包裹簽收系統(棟名)</a></p>
<p align="center">目前資料筆數：<?php echo $total_records;?>，<a href="parcel_add.php">新增資料</a>。</p>
<table border="1" align="center">
  <!-- 表格表頭 -->
  <tr>
    <th>包裹編號</th>
    <th>住址</th>
    <th>簽收與否</th>
    <th>簽收時間</th>
    <th>簽收憑證</th>
    <th>建立時間</th>
    <th>編輯時間</th>
    <th>刪除時間</th>
  </tr>
  <!-- 資料內容 -->
<?php
	while($row_result=$result->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$row_result["P_ID"]."</td>";
		echo "<td>".$row_result["A_ID"]."</td>";
		echo "<td>".$row_result["Sign"]."</td>";
		echo "<td>".$row_result["Sign_time"]."</td>";
		echo "<td>".$row_result["Sign_proof"]."</td>";
		echo "<td>".$row_result["Add_time"]."</td>";
		echo "<td>".$row_result["Edit_time"]."</td>";
		echo "<td>".$row_result["Del_time"]."</td>";
		echo "<td><a href='parcel_update.php?id=".$row_result["P_ID"]."'>修改</a> ";
		echo "<a href='parcel_delete.php?id=".$row_result["P_ID"]."'>刪除</a></td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>
