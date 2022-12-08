<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>組み込み関数を知る</li>
            <li>if文と文と関数を組み合わせておみくじを作る</li>
            <li>(演習)自由におみくじをアレンジする</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ここから -->
<!-- 日付を取得する関数↓ -->
<?php
// YとHは大文字で書く XMAMPはベルリンの時計に合っている↓
// $today = date('Y/m/d H:i');
// echo $today;

$today = date('Y年m月d日 H時i分');
echo $today;

// $string変数の中に'abcde'を格納
// strlen(文字数を確認したい変数、文字);を使って文字数を表示してあげる

// $string = 'abcde';
// echo strlen($string);
// $legth = strlen($string);
// echo'<br>';
// echo $string . 'の文字数は' . $length . 'です';

$string = 'abcde';
// echo strlen($string);
$length = strlen($string);
echo '<br>';
echo $string . 'の文字数は' . $length . 'です、やー！';

// ランダム変数（おみくじとか）↓
// 1～10の間でランダムな数を表示させる
// $random_num=rand(1,10);
// var_dumpはechoでも同じ↓
// var_dump($random_num);
// echo'<br>'

// jsの書き方と同じ↓
// 1～2の間でランダムな数を表示させる
$random_num = rand(1, 2);
    // echo '<br>';
    // var_dump($random_num);
    echo '<br>';
    if ($random_num === 1) {
        echo '大吉';
    } else {
        echo '大凶';
    }

?>

    <!-- ここまで -->
</body>

</html>
