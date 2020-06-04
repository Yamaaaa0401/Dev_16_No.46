<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
// 変数の情報表示
$test="test";

var_dump($test);


// 変数表示
$test2="test2";

echo $test2;


// 日付表示
$time=date("Y年m月d日 H時i分s秒");
$time2=date("Y/m/d H:i:s");
// Y,Hは大文字　頭になる部分は大文字
// echo $time;
echo $time."    ".$time2;


// 文字列のサイズ表示 strlen("文字列")
$count = strlen("あああああああああああ");
echo'<br>';
echo $count;

// $num=rand(1,2);

// if($num===1){
//     echo"あたり；"
// }else{
//     echo"hazure";
// }


// XSS対策用関数作成
function h ($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}



?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>