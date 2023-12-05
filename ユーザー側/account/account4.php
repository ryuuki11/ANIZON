<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/account4.css">
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>login</title>
</head>
<body>
<div id="wrap">
<?php require '../home/header_sazae.php'; ?>

    <p class="name">変更内容</p><br>
    
    <?php
    if (empty($_POST['login']) or empty($_POST['password']) or empty($_POST['m_name']) or empty($_POST['post']) or empty($_POST['address']) or empty($_POST['city']) or empty($_POST['town']) or empty($_POST['dal']) or empty($_POST['mail']) or empty($_POST['number'])) {
        echo '未入力の項目があります。';
        echo '<div><button onclick="location.href=',"'account3.php'",'">戻る</button></div>';
    }else{
        echo '<form action="account5.php" method="post">';
        echo '<p class="title top">ログインID</p>';
        echo '<p>',$_POST['login'],'</p>';
        echo '<input type="hidden" name="login" value="',$_POST['login'],'">';

        echo '<p class="title">パスワード</p>';
        echo '<p>',$_POST['password'],'</p>';
        echo '<input type="hidden" name="password" value="',$_POST['password'],'">';

        echo '<p class="title">名前</p>';
        echo '<p>',$_POST['m_name'],'</p>';
        echo '<input type="hidden" name="m_name" value="',$_POST['m_name'],'">';
        
        echo '<p class="title">ご住所</p>';
        echo '<p>',$_POST['post'],'<br>',$_POST['address'],'</p>';
        echo '<input type="hidden" name="post" value="',$_POST['post'],'">';
        echo '<input type="hidden" name="address" value="',$_POST['address'],'">';
        echo '<input type="hidden" name="city" value="',$_POST['city'],'">';
        echo '<input type="hidden" name="town" value="',$_POST['town'],'">';
        echo '<input type="hidden" name="dal" value="',$_POST['dal'],'">';
        
        echo '<p class="title">マンション名・号室</p>';
        echo '<p>',$_POST['apart'],'</p>';
        echo '<input type="hidden" name="apart" value="',$_POST['apart'],'">';

        echo '<p class="title">メールアドレス</p>';
        echo '<p>',$_POST['mail'],'</p>';
        echo '<input type="hidden" name="mail" value="',$_POST['mail'],'">';
        
        echo '<p class="title">電話番号</p>';
        echo '<p>',$_POST['number'],'</p>';
        echo '<input type="hidden" name="number" value="',$_POST['number'],'">';
        echo '<div><button onclick="location.href=',"'account3.php'",'">戻る</button></div>';
        echo '<div><button type="submit" class="toroku">変更</button></div>';
    echo '</form>';
    }
    ?>

<?php require '../home/footer.php'; ?>
</div>
        
</body>
</html>