<link rel="stylesheet" href="CSS/sample.css2">



<?php
// header('Content-Type: text/css; charset=utf-8');
// ファイルを開く
$openFile = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
// fgets($openFile)で、1行を読み込み、それを$strに代入
// 何も読み込むものがなくなると、while文が終了する
while ($str = fgets($openFile)) {
    // nl2br ... textファイルの改行を<br>に変換する関数

    // echo '<p class="kekka">nl2br($str)</p>';
    
    echo '<div class="kekka">';
    echo nl2br($str);
    echo '</div>';
    // echo'<br>';
    
   
};

fclose($openFile);

?>
 