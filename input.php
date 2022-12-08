<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
<!-- ↑マテリアルアイコンのURL -->
<link rel="stylesheet" href="CSS/sample.css">

<?php
// $name = $_POST['name'];
// $mail = $_POST['mail'];
// $school = $_POST['school'];
// $message = $_POST['message'];

// 変数を用意
$time = date("Y-m-d H:i:s");

// エラー箇所！！！↓
// $str = $time . ' / ' . $name . ' /' .  $mail . ' ' . $school . ' ' . $message ;

// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, "\n");
fclose($file);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<body>
    <div class="form">
    <form action="write.php" method="post">
  
     <!-- 人のマテリアルアイコン↓(hitoはclass属性) -->
    <i class="material-icons hito" >person</i>
    <!-- placeholderを使い、入力前の入力フォームに文字を表示させる↓ -->
        お名前:<input type="text" name="name" placeholder="氏名"> 
  

        <br><i class="material-icons tegami" >mail</i>
        メールアドレス: <input type="text" name="mail" placeholder="メールアドレス"> 

        <br><i class="material-icons gakkou" >location_city</i>
        学校・施設名: <input type="text" name="school" placeholder="学校・施設名を入力" > 

        <br><div class="message">
        <i class="material-icons comment" >chat</i>
        学校・施設の感想: 
        <!-- 入力前の入力フォームに文字を表示させる↓（改行ありのフォームを作りたい時はtextarea placeholderを使う↓ -->

        <textarea placeholder="コメントを入力して下さい。" name="message" ></textarea>
        </div>
        <input type="submit" value="送信">
    </form>
    </div>
    <div class="map_app">
    <div id="view"></div>
  
    <div id="myMap"></div>
    
      <!-- jQuery&GoogleMapsAPI -->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AlmKw1rmOPFHgKj76GFFzeTL1A_mlDV3-B-BN1G3GOiKKHrX0ujzf_NHqD7l5P-O' async
    defer></script>
  <script src="js/BmapQuery.js"></script>
  <script src="js/map.js"></script>

  <!-- <script type="module"> -->
    <!-- // Import the functions you need from the SDKs you need
    // import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.3/firebase-app.js";
    // import { getDatabase, ref, push, set, onChildAdded, remove,onChildRemoved, serverTimestamp} from "https://www.gstatic.com/firebasejs/9.1.3/firebase-database.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration -->


  
  <!-- </script> -->
</body>

</html>
