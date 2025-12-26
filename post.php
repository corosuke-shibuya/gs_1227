<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
	<p>
		
<form action="post_confirm.php" method="post">
	お名前: <input type="text" name="name"><br>
	EMAIL: <input type="text" name="mail"><br>
	お住まいのエリア:
<select name="area" required><br>
  <option value="">選択してください</option>
  <option value="北海道・東北">北海道・東北</option>
  <option value="関東">関東</option>
  <option value="中部">中部</option>
  <option value="近畿">近畿</option>
  <option value="中国四国">中国四国</option>
  <option value="九州・沖縄">九州・沖縄</option>
</select>
	生年月日:
<input type="date" name="birth_date" required min="1900-01-01" max="2025-12-31">
</p>
	<input type="submit" value="送信">
</form>
</body>
</html>
