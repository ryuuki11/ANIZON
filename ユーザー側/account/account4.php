<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/account4.css">
    <title>login</title>
</head>
<body>
    <p class="name">変更内容</p><br>
    <div class="buttn2"><button class="return" onclick="location.href='account3.php'">戻る</button></div>
    <?php
    if (empty($_POST['login']) or empty($_POST['password']) or empty($_POST['name']) or empty($_POST['post']) or empty($_POST['address']) or empty($_POST['mail']) or empty($_POST['number'])) {
        echo '未入力の項目があります。';
    }else{
        echo '<form action="account5.php" method="post">';
        echo '<p class="title top">ログインID</p>';
        echo '<p>',$_POST['login'],'</p>';
        echo '<input type="hidden" name="login" value="',$_POST['login'],'">';

        echo '<p class="title">パスワード</p>';
        echo '<p>',$_POST['password'],'</p>';
        echo '<input type="hidden" name="password" value="',$_POST['password'],'">';

        echo '<p class="title">名前</p>';
        echo '<p>',$_POST['name'],'</p>';
        echo '<input type="hidden" name="name" value="',$_POST['name'],'">';
        
        echo '<p class="title">ご住所</p>';
        echo '<p>',$_POST['post'],'<br>',$_POST['address'],'</p>';
        echo '<input type="hidden" name="post" value="',$_POST['post'],'">';
        echo '<input type="hidden" name="address" value="',$_POST['address'],'">';
        
        echo '<p class="title">マンション名・号室</p>';
        echo '<p>',$_POST['apart'],'</p>';
        echo '<input type="hidden" name="apart" value="',$_POST['apart'],'">';

        echo '<p class="title">メールアドレス</p>';
        echo '<p>',$_POST['mail'],'</p>';
        echo '<input type="hidden" name="mail" value="',$_POST['mail'],'">';
        
        echo '<p class="title">電話番号</p>';
        echo '<p>',$_POST['number'],'</p>';
        echo '<input type="hidden" name="number" value="',$_POST['number'],'">';

        echo '<div><button type="submit" class="toroku">変更</button></div>';
    echo '</form>';
    }
    ?>

        
</body>
</html>