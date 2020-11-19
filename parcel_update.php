<?php
	include("connMysqlObj.php");
	if(isset($_POST["action"])&&($_POST["action"]=="update")){
		$sql_query = "UPDATE parcels SET A_ID=?, Sign=?, Sign_time=?, Sign_proof=?, Add_time=?, Edit_time=?, Del_time=? WHERE P_ID=?";
		$stmt = $db_link -> prepare($sql_query);
		$stmt -> bind_param("iisssssi",
                      $_POST["A_ID"],
                      $_POST["Sign"],
                      $_POST["Sign_time"],
                      $_POST["Sign_proof"],
                      $_POST["Add_time"],
                      $_POST["Edit_time"],
                      $_POST["Del_time"],
                      $_POST["P_ID"]);
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
<title></title>
</head>
<body>
<h1 align="center">包裹簽收系統（包裹） - 修改資料</h1>
<p align="center"><a href="parcel.php">回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>住址(外部鍵)</td><td><input type="text" name="A_ID" id="A_ID" value="<?php echo $address_id;?>"></td>
    </tr>
    <tr>
      <td>簽收與否</td><td><input type="text" name="Sign" id="Sign" value="<?php echo $sign;?>"></td>
    </tr>
    <tr>
      <td>簽收時間</td><td><input type="datetime-local" name="Sign_time" id="Sign_time" value="<?php echo $sign_time;?>"></td>
    </tr>
    <tr>
      <td>簽收憑證</td><td><input type="text" name="Sign_proof" id="Sign_proof" value="<?php echo $sign_proof;?>"></td>
    </tr>
    <tr>
      <td>建立時間</td><td><input type="datetime-local" name="Add_time" id="Add_time" value="<?php echo $add_time;?>"></td>
    </tr>
    <tr>
      <td>編輯時間</td><td><input name="Edit_time" type="datetime-local" id="Edit_time" value="<?php echo $edit_time;?>"></td>
    </tr>
    <tr>
      <td>刪除時間</td><td><input name="Del_time" type="datetime-local" id="Del_time" value="<?php echo $del_time;?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input name="P_ID" type="hidden" value="<?php echo $parcel_id;?>">
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
