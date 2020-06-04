<?php
//フォームから入ったデータを受け取りたい
$name=$_POST["user_name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$pcos=$_POST["pcos"];



// フィいるに活気込み

// $file = fopen("data/data.txt","a");
// // 受け取ったデーたを↓にいっれれば⇒上の変数が入る
//     fwrite($file,$name."   ".$email."\n");

// fclose($file);

// 配列で入力したい
$array=["$name","$email","$gender","$pcos"];
$file = fopen("data/fput.csv","a");
// CSV形式で書き込む
fputcsv($file, $array);
// ファイルを閉じる
fclose($file);


?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
<li><a href="read.php">集計結果</a></li>
</ul>
</body>
</html>