<?php
// データを受け取りたい時は一番最初にPHPを記載する
// デートを受け取る
$name=$_GET["user_name"];
$email=$_GET["email"];
$gender=$_GET["gender"]


?>

<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
<p>お名前：<?=$name?></p>
<p>Mail：<?=$email?></p>
<p>性別：<?=$gender?></p>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>