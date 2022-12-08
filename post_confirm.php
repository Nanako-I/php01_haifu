// POSTを受け取る
// POSTの場合はパスワードも送ってみる。
<?php

// $_GETの時はname/mailが遷移先のブラウザのURLに載るが、$_POSTの場合はURLには表示されない
$name = $_POST['name'];
$mail = $_POST['mail'];

?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <p>お名前：<?= $name ?> </p>
    <p>EMAIL：<?= $mail ?> </p>
    パスワード：
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
