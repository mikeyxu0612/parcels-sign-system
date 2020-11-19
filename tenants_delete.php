<?php
	include("connMysqlObj.php");
	if(isset($_POST["action"])&&($_POST["action"]=="delete")){
		$sql_query = "DELETE FROM tenants WHERE t_ID=?";
		$stmt = $db_link -> prepare($sql_query);
		$stmt -> bind_param("i", $_POST["t_ID"]);
		$stmt -> execute();
		$stmt -> close();
		$db_link -> close();
		//重新導向回到主畫面
		header("Location: tenants.php");
	}
	$sql_select = "SELECT t_ID, T_name, phone, D_ID, Add_time, Edit_time, Del_time FROM tenants WHERE t_ID = ?";
	$stmt = $db_link -> prepare($sql_select);
	$stmt -> bind_param("i", $_GET["id"]);
	$stmt -> execute();
	$stmt -> bind_result($tenants_id, $tenants_name, $phone, $d_id, $add_time, $edit_time, $del_time);
	$stmt -> fetch();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>包裹管理系統(住戶)</title>
</head>
<body>
<h1 align="center">包裹管理系統(住戶) - 刪除資料</h1>
<p align="center"><a href="tenants.php">回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>住戶姓名</td><td><?php echo $tenants_name;?></td>
    </tr>
    <tr>
      <td>聯絡電話</td><td><?php echo $phone; ?></td>
    </tr>
    <tr>
      <td>住址(外部鍵)</td><td><?php echo $d_id; ?></td>
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
      <input name="t_ID" type="hidden" value="<?php echo $tenants_id;?>">
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
