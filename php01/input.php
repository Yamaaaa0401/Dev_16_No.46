<html>
<head>
<meta charset="utf-8">
<title>課題テンプレート</title>
</head>
<body>
<!-- 入れたい場所をアクションに各 -->
<form action="write.php" method="post">
	お名前: <input type="text" name="user_name">
	<br>
	EMAIL: <input type="text" name="email">
	<br>

	性別：<select name="gender">
		<option value="male">男性</option>
		<option value="female">女性</option>
		</select>
	<br>
		使用OS：<select name="pcos">
		<option value="Mac">Mac</option>
		<option value="Windows">Windows</option>
		</select>
	<br>
	<input type="submit" value="送信">
</form>
</body>
</html>