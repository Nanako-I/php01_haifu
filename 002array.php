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
            <li>配列の書き方を確認(出力の仕方も確認)</li>
            <li>var_dumpを使う</li>
            <li>(演習)配列名'loveFoods'で、自分の好きな食べ物3つの配列を作成。echoで、一番好きなものを出力</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ↓ここから -->
<?php
// 配列の書き方↓
// aryは自分の好きな名前で良い↓
   $ary= ['東京','札幌','福岡',999];
   //   echoもvar_dumpも同じ 表示されているか確認。jsのコンソールログと同じ↓
//    echo $ary;
//    jsのコンソールログと同じ↓
//    var_dump($ary);

// 配列の0番目を表示させる↓
//    var_dump($ary[0]);

// 配列を追加する↓
   $ary[]='長万部';
//    var_dump($ary);

//    (演習)配列名'loveFoods'で、自分の好きな食べ物3つの配列を作成
   $lovefoods= ['カレー','ハンバーグ','すき焼き'];

//    echoで、一番好きなものを出力
    echo ($lovefoods[1]);

?>
    <!-- ↑ここまで -->
</body>

</html>
