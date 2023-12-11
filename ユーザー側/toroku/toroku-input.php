<?php
    const SERVER = 'mysql219.phy.lolipop.lan';
    const DBNAME = 'LAA1518095-anizon';
    const USER = 'LAA1518095';
    const PASS = 'Pass0809';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF=8">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/toroku.css">
    <link rel="stylesheet" href="../home/css/header_title.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>新規登録 </title>
</head>
<body>
<div id="wrap">
<?php require '../home/header_title.php'; ?>
    <?php

 echo '<form action="toroku.php" method="post">';
 echo '<div class="ID">ログインIDを20字以内で入力してください</div>';
 echo '<input type="text" name="login">';
 echo '<div class="pass">パスワードを20字以内で入力してください</div>';
 echo '<input type="password" name="password" >';
 echo '<div class="name">お名前</div>';
 echo ' <input type="text" name="m_name" >';
 echo ' <div class="place">ご住所</div>';
 echo ' <div>郵便番号を入力してください</div>';
 echo '<div class="button">';
 echo ' <input type="text" class="post" name="post" placeholder="例：1234567">';
 echo ' <input type="button" class="ajaxzip3" href="#" value="自動入力">';
 echo '</div>';
 echo ' <div>県名</div>';
 echo ' <input type="text" name="address" >';
 echo ' <div>市区町村</div>';
 echo ' <input type="text" name="city"  >';
 echo ' <div>町名</div>'; 
 echo ' <input type="text" name="town" >';
 echo ' <div>番地</div>';
 echo ' <input type="text" name="dal"  >';
 echo ' <div>マンション名、号室等</div>';
 echo ' <input type="text"  name="apart" >';
 echo ' <div>メールアドレスを入力してください</div>';
 echo ' <input type="text"  name="mail" >';
 echo ' <div>電話番号</div>';
 echo ' <input type="text" name="number">';
 echo ' <div><button class="toroku" type="submit">確認</button></div>';
 echo '</form>';
    ?>
    <?php require '../home/footer.php'; ?>
    </div>
    <script>
            $('.ajaxzip3').on('click', function(){
    AjaxZip3.zip2addr('post','','address','city','town','dal');

    //成功時に実行する処理
    AjaxZip3.onSuccess = function() {
        $('.dal').focus();
    };
    
    //失敗時に実行する処理
    AjaxZip3.onFailure = function() {
        alert('郵便番号に該当する住所が見つかりません');
    };
    
    return false;

});
            </script>
            
</body>


</html>