<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/account2-1.css">
    <title>アカウント情報</title>
</head>
<body>
    <?php
    $login=$pass=$name=$post=$address=$city=$apart=$mail=$tell='';
    if(isset($_SESSION['member'])) {
        $login = $_SESSION['member']['login'];
        $pass = $_SESSION['member']['password'];
        $name = $_SESSION['member']['m_name'];
        $post = $_SESSION['member']['post'];
        $address = $_SESSION['member']['address'];
        $city = $_SESSION['member']['city'];
        $apart = $_SESSION['member']['apart'];
        $mail = $_SESSION['member']['mail'];
        $tell = $_SESSION['member']['number'];
    }

    echo '<p class="name">',$name,'さんのアカウント情報</p><br>';
    
    echo '<p class="midasi top">ログインID</p>';
    echo '<p>',$login,'</p>';

    echo '<p class="midasi">パスワード</p>';
    echo '<p>',$pass,'</p>';
        
    echo '<p class="midasi">メールアドレス</p>';
    echo '<p>',$mail,'</p>';
        
    echo '<p class="midasi">住所</p>';
    echo '<p>〒',$post,'<br>',$address,$city,'</p>';
        
    echo '<p class="midasi">マンション名・号室</p>';
    echo '<p>',$apart,'</p>';
        
    echo '<p class="midasi">電話番号</p>';
    echo '<p>',$tell,'</p>';
    ?>

    <div><button class="toroku" onclick="location.href='account3.php'">変更する</button></div>
</body>
</html>