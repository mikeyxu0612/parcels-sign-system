<?php
	include("connMysqlObj.php");
	if(isset($_POST["action"])&&($_POST["action"]=="delete")){
		$sql_query = "DELETE FROM building WHERE B_ID=?";
		$stmt = $db_link -> prepare($sql_query);
		$stmt -> bind_param("i", $_POST["B_ID"]);
		$stmt -> execute();
		$stmt -> close();
		$db_link -> close();
		//重新導向回到主畫面
		header("Location: Buildings.php");
	}
	$sql_select = "SELECT B_ID, B_name, Add_time, Edit_time, Del_time FROM building WHERE B_ID = ?";
	$stmt = $db_link -> prepare($sql_select);
	$stmt -> bind_param("i", $_GET["id"]);
	$stmt -> execute();
	$stmt -> bind_result($building_id, $building_name, $add_time, $edit_time, $del_time);
	$stmt -> fetch();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>包裹管理系統(棟名)</title>
</head>
<body>
<h1 align="center">包裹管理系統(棟名) - 刪除資料</h1>
<p align="center"><a href="building.php">回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>棟名</td><td><?php echo $building_name;?></td>
    </tr>
    <tr>
      <td>建立時間</td><td><?php echo $add_time; ?></td>
    </tr>
    <tr>
      <td>編輯時間</td><td><?php echo $edit_time; ?></td>
    </tr>
    <tr>
      <td>刪除時間</td><td><?php echo $del_time; ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="B_ID" type="hidden" value="<?php echo $building_id;?>">
      <input name="action" type="hidden" value="delete">
      <input type="submit" name="button" id="button" value="確定刪除這筆資料嗎？">
      </td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
	$stmt -> close();
	$db_link -> close();
?>
