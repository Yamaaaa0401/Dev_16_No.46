<?php

// ファイル名を変数にしておきましょう
$filename='data/fput.csv';

$fp = fopen($filename,'r');
?>

<table border="1">
<tr>
<td>名前</td>
<td>メールアドレス</td>
<td>性別</td>
<td>使用しているOS</td>
</tr>

<?php
while(!feof($fp)){
$csv = fgets($fp);
$str = explode(",",$csv);

?>

<tr>
<td><?php echo $str[0]; ?></td>
<td><?php echo $str[1]; ?></td>
<td><?php echo $str[2]; ?></td>
<td><?php echo $str[3]; ?></td>
</tr>
<br>

$values=array_values($str);
print_r($values);


<?php
};


// fcloseで開いたファイルを占める
fclose($fp);
?>
</table>
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
<h1>アンケート結果</h1>

<ul>
<li><a href="input.php">戻る</a></li>
<li><a href="http://localhost/php01/">一覧へ</a></li>
</ul>


</body>
</html>