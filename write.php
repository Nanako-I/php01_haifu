<link rel="stylesheet" href="CSS/sample.css3">

<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$school = $_POST['school'];
$message = $_POST['message'];

$time = date('Y-m-d H:i:s');
// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
// . "<br>" . でつないでデータを表示させる時に改行させる↓
fwrite($file, $time . "<br>" . $name . "<br>" . $mail . "<br>" . $school . "<br>" . $message ."<br>");
fclose($file);
//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
    <div class="message_sent">

    <h2>ご協力ありがとうございました</h2>
    <!-- <h2>./data/data.txt を確認しましょう！</h2> -->

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
    </div>
</body>

</html>
