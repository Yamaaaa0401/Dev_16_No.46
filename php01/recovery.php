<?php

// ファイル名を変数にしておきましょう
$filename='data/fput.csv';

$fp = fopen($filename,'r');
?>
// -----------------ここから↓講義内容
// データの分だけ描画する処理をおこなうwhile ≠if文
// ファイルの最後までメソッド
// while( !feof($fp) ){

    // fget関数でtxtデータを取得する
//     $txt=fgets($fp);

    // データの出力
//     echo $txt.'<br>';
// }
// -------------------ここまで↑講義の内容

// ------------------------ここから↓コピペー
<table border="1">
<tr>
<td>順位</td>
<td>ゼッケンナンバー</td>
<td>タイム</td>
</tr>;
<?php
while(!feof($fp)){
$csv = fgets($fp);
$str = explode(",", $csv);
?>
<tr>
<td><? echo $str[0]; ?></td>
<td><? echo $str[1]; ?></td>
<td><? echo $str[2]; ?></td>
<td><? echo $str[3]; ?></td>
</tr>

}
// ------------------------ここまでコピペ
<?php
// fcloseで開いたファイルを占める
fclose($fp);

?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>


<ul>
<li><a href="input.php">戻る</a></li>
<li><a href="http://localhost/php01/">一覧へ</a></li>

</ul>
</body>
</html>