<?php
	include("connMysqlObj.php");
	if(isset($_POST["action"])&&($_POST["action"]=="update")){
		$sql_query = "UPDATE tenants SET T_name=?, phone=?, D_ID=?, Add_time=?, Edit_time=?, Del_time=? WHERE t_ID=?";
		$stmt = $db_link -> prepare($sql_query);
		$stmt -> bind_param("ssisssi",
                      $_POST["T_name"],
                      $_POST["phone"],
                      $_POST["D_ID"],
                      $_POST["Add_time"],
                      $_POST["Edit_time"],
                      $_POST["Del_time"],
                      $_POST["t_ID"]);
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
	$stmt -> bind_result($t_id, $t_name, $phone, $d_id, $add_time, $edit_time, $del_time);
	$stmt -> fetch();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NBA 球員資料管理系統</title>
</head>
<body>
<h1 align="center">包裹簽收系統（住戶） - 修改資料</h1>
<p align="center"><a href="tenants.php">回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>住戶姓名</td><td><input type="text" name="T_name" id="T_name" value="<?php echo $t_name;?>"></td>
    </tr>
    <tr>
      <td>連絡電話</td><td><input type="text" name="phone" id="phone" value="<?php echo $phone;?>"></td>
    </tr>
    <tr>
      <td>住址(外部鍵)</td><td><input type="text" name="D_ID" id="D_ID" value="<?php echo $d_id;?>"></td>
    </tr>
    <tr>
      <td>建立時間</td><td><input type="datetime-local" name="Add_time" id="Add_time" value="<?php echo $add_time;?>"></td>
    </tr>
    <tr>
      <td>編輯時間</td><td><input type="datetime-local" name="Edit_time" id="Edit_time" value="<?php echo $edit_time;?>"></td>
    </tr>
    <tr>
      <td>刪除時間</td><td><input name="Del_time" type="datetime-local" id="Del_time" value="<?php echo $del_time;?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="t_ID" type="hidden" value="<?php echo $t_id;?>">
      <input name="action" type="hidden" value="update">
      <input type="submit" name="button" id="button" value="更新資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
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
