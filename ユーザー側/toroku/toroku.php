<?php session_start(); ?>
<?php require '../db_connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/toroku0.css">
    <link rel="stylesheet" href="../home/css/header_title.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>アカウント情報</title>
</head>
<body>
<div id="wrap">

        <?php require '../home/header_title.php'; ?>
    <?php
$pdo=new PDO ($connect,USER,PASS);

    $login=$password=$m_name=$post=$address=$city=$town=$dal=$apart=$mail=$number='';
        $_SESSION['member2']['login']=$_POST['login'];
        $_SESSION['member2']['password']=$_POST['password'];
        $_SESSION['member2']['m_name']=$_POST['m_name'];
        $_SESSION['member2']['post']=$_POST['post'];
        $_SESSION['member2']['address']=$_POST['address'];
        $_SESSION['member2']['city']=$_POST['city'];
        $_SESSION['member2']['town']=$_POST['town'];
        $_SESSION['member2']['dal']=$_POST['dal'];
        $_SESSION['member2']['apart']=$_POST['apart'];
        $_SESSION['member2']['mail']=$_POST['mail'];
        $_SESSION['member2']['number']=$_POST['number'];

        if(empty($_SESSION['member2']['login']) or empty($_SESSION['member2']['password']) or empty($_SESSION['member2']['m_name']) or empty($_SESSION['member2']['post']) or empty($_SESSION['member2']['address']) or empty($_SESSION['member2']['city']) or empty($_SESSION['member2']['town']) or empty($_SESSION['member2']['dal']) or empty($_SESSION['member2']['mail']) or empty($_SESSION['member2']['number'])){
            echo '<p class="top">未入力の項目があります</p>';
            echo '<button onclick="location.href=',"'toroku-input.php'",'">戻る</button>';
        }else{
            $sql=$pdo->prepare('select * from Member where login=?');
            $sql->execute([$_SESSION['member2']['login']]);
            if(empty($sql->fetchAll())){
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
                echo '<div><button  onclick="location.href=\'toroku-input.php\'">戻る</button></div>';
                echo '<div class="bottom"><button class="toroku" onclick="location.href=\'toroku-output.php\'">登録</button></div>';
            }else{
                echo '<p class="top">ログインIDが既に使用されています。変更してください。</p>';
                echo '<button onclick="location.href=',"'toroku-input.php'",'">戻る</button>';
            }

    }
    ?>
    

    
    <?php require '../home/footer.php'; ?>
    </div>
</body>
</html>