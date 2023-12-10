<?php session_start(); ?>
<?php require '../db_connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/toroku.css">
    <title>アカウント情報</title>
</head>
<body>
    <?php
    $login=$password=$m_name=$post=$address=$city=$town=$dal=$apart=$mail=$number='';
        $_SESSION['member']['login']=$_POST['login'];
        $_SESSION['member']['password']=$_POST['password'];
        $_SESSION['member']['m_name']=$_POST['m_name'];
        $_SESSION['member']['post']=$_POST['post'];
        $_SESSION['member']['address']=$_POST['address'];
        $_SESSION['member']['city']=$_POST['city'];
        $_SESSION['member']['town']=$_POST['town'];
        $_SESSION['member']['dal']=$_POST['dal'];
        $_SESSION['member']['apart']=$_POST['apart'];
        $_SESSION['member']['mail']=$_POST['mail'];
        $_SESSION['member']['number']=$_POST['number'];
    echo '<h2>登録内容確認</h2>';
    echo '<p class="midasi">お名前</p>';
    echo '<p>',$_POST['m_name'],'</p>';
    echo '<p class="midasi">ログインID</p>';
    echo '<p>',$_POST['login'],'</p>';
    echo '<p class="midasi">パスワード</p>';
    echo '<p>';
        for ($i=1;$i<strlen($_POST['password']);$i++) {
            echo '●';
        }
    echo '</p>';
    echo '<p class="midasi">住所</p>';
    echo '<p>〒',$_POST['post'],'</p>';
    echo '<p class="midasi">都道府県</p>';
    echo '<p>',$_POST['address'],'<p>';
    echo '<p class="midasi">市区町村</p>';
    echo '<p>',$_POST['city'],'</p>';
    echo '<p class="midasi">町名</p>';
    echo '<p>',$_POST['town'],'</p>';
    echo '<p class="midasi">番地<p>';
    echo '<p>',$_POST['dal'],'</p>';
    echo '<p class="midasi">マンション名・号室</p>';
    echo '<p>',$_POST['apart'],'</p>';
    echo '<p class="midasi">メールアドレス</p>';
    echo '<p>',$_POST['mail'],'</p>';
    echo '<p class="midasi">電話番号</p>';
    echo '<p>',$_POST['number'],'</p>';
    ?>

    <div><button  onclick="location.href='toroku-input.php'">戻る</button></div>
    <div><button class="toroku" onclick="location.href='toroku-output.php'">登録</button></div>
</body>
</html>