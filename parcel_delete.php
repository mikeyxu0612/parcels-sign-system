<?php
	include("connMysqlObj.php");
	if(isset($_POST["action"])&&($_POST["action"]=="delete")){
		$sql_query = "DELETE FROM parcels WHERE P_ID=?";
		$stmt = $db_link -> prepare($sql_query);
		$stmt -> bind_param("i", $_POST["P_ID"]);
		$stmt -> execute();
		$stmt -> close();
		$db_link -> close();
		//重新導向回到主畫面
		header("Location: parcels.php");
	}
	$sql_select = "SELECT P_ID, A_ID, Sign, Sign_time, Sign_proof, Add_time, Edit_time, Del_time FROM parcels WHERE P_ID = ?";
	$stmt = $db_link -> prepare($sql_select);
	$stmt -> bind_param("i", $_GET["id"]);
	$stmt -> execute();
	$stmt -> bind_result($parcel_id, $address_id, $sign, $sign_time, $sign_proof, $add_time, $edit_time, $del_time);
	$stmt -> fetch();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>包裹管理系統(包裹)</title>
</head>
<body>
<h1 align="center">包裹管理系統(包裹) - 刪除資料</h1>
<p align="center"><a href="parcel.php">回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>住址(外部鍵)</td><td><?php echo $address_id;?></td>
    </tr>
    <tr>
      <td>簽收與否</td><td><?php echo $sign; ?></td>
    </tr>
    <tr>
      <td>簽收時間</td><td><?php echo $sign_time; ?></td>
    </tr>
    <tr>
      <td>簽收憑證</td><td><?php echo $sign_proof; ?></td>
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
      <input name="P_ID" type="hidden" value="<?php echo $parcel_id;?>">
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
