<?php
if(isset($_POST["action"])&&($_POST["action"]=="add")){
	include("connMysqlObj.php");
	$sql_query = "INSERT INTO building (B_name, Add_time, Edit_time, Del_time) VALUES (?, ?, ?, ?)";
	$stmt = $db_link -> prepare($sql_query);
	$stmt -> bind_param("ssss",
                      $_POST["B_name"],
                      $_POST["Add_time"],
                      $_POST["Edit_time"],
                      $_POST["Del_time"]);
	$stmt -> execute();
	$stmt -> close();
	$db_link -> close();
	//重新導向回到主畫面
	header("Location: Buildings.php");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>包裹管理系統(棟名)</title>
</head>
<body>
<h1 align="center">包裹管理系統(棟名) - 新增資料</h1>
<p align="center"><a href="building.php">回主畫面</a></p>
<form action="" method="post" name="formAdd" id="formAdd">
  <table border="1" align="center" cellpadding="4">
    <tr>
      <th>欄位</th><th>資料</th>
    </tr>
    <tr>
      <td>棟名</td><td><input type="text" name="B_name" id="B_name"></td>
    </tr>
    <tr>
      <td>建立時間</td><td><input type="datetime-local" name="Add_time" id="Add_time"></td>
    </tr>
    <tr>
      <td>編輯時間</td><td><input type="datetime-local" name="Edit_time" id="Edit_time"></td>
    </tr>
    <tr>
      <td>刪除時間</td><td><input type="datetime-local" name="Del_time" id="Del_time"></td>
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
