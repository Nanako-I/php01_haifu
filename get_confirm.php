// GETで送られてきた名前とアドレスのデータを受け取る


// (演習)名前、アドレス以外の情報を追加して送ってみましょう（性別、年齢などなど）
<?php

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

$name = $_GET['name'];
$mail = $_GET['mail'];
?>
<html>
<head>
    <meta charset="utf-8">
    <title>GET練習（受信）</title>
</head>

<body>
    <!-- ブラウザ上に表示させる -->
    <!-- echoの省略形 -->
    <p>お名前：<?= $name ?> </p>
    <p>Mail：<?= $mail ?></p>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
