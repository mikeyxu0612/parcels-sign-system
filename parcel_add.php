<?php
if(isset($_POST["action"])&&($_POST["action"]=="add")){
	include("connMysqlObj.php");
	$sql_query = "INSERT INTO parcels (A_ID, Sign, Sign_time, Sign_proof, Add_time, Edit_time, Del_time) VALUES (?, ?, ?, ?, ? ,? ,?)";
	$stmt = $db_link -> prepare($sql_query);
	$stmt -> bind_param("iisssss",
                      $_POST["A_ID"],
                      $_POST["Sign"],
                      $_POST["Sign_time"],
                      $_POST["Sign_proof"],
                      $_POST["Add_time"],
                      $_POST["Edit_time"],
											$_POST["Del_time"]);
	$stmt -> execute();
	$stmt -> close();
	$db_link -> close();
	//重新導向回到主畫面
	header("Location: parcels.php");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>包裹管理系統(包裹)</title>
</head>
<body>
<h1 align="center">包裹管理系統(包裹) - 新增資料</h1>
<p align="center"><a href="parcel.php">回主畫面</a></p>
<form action="" method="post" name="formAdd" id="formAdd">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>住址(外部鍵)</td><td><input type="text" name="A_ID" id="A_ID"></td>
    </tr>
    <tr>
      <td>簽收與否</td><td><input type="text" name="Sign" id="Sign"></td>
    </tr>
     <tr>
      <td>簽收時間</td><td><input type="datetime-local" name="Sign_time" id="Sign_time"></td>
    </tr>
    <tr>
      <td>簽收憑證</td><td><input type="text" name="Sign_proof" id="Sign_proof"></td>
    </tr>
    <tr>
      <td>建立時間</td><td><input type="datetime-local" name="Add_time" id="Add_time"></td>
    </tr>
    <tr>
      <td>編輯時間</td><td><input name="Edit_time" type="datetime-local" id="Edit_time"></td>
    </tr>
    <tr>
      <td>刪除時間</td><td><input name="Del_time" type="datetime-local" id="Del_time"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input type="hidden" name="action" value="add">
      <input type="submit" name="button" id="button" value="新增資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
  </table>
</form>
</body>
</html>
