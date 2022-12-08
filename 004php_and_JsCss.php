<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }

        .red{
            color:red;
        }

    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>PHPファイルとJS/CSSの動きを知る。</li>
        </ul>
    </div>
<?php
// classをあてる↓
echo'<p class="red">cssのテスト</p>';
echo'<p id="test">JSテスト</p>';
?>

<script>
    let test = document.getElementById('テスト');
    console.log(test);

    
</script>

</body>

</html>