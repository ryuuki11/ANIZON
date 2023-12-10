<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/account2-1.css">
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>アカウント情報</title>
</head>
<body>
    <div id="wrap">
        <?php require '../home/header_sazae.php'; ?>
        <?php
            $login=$pass=$name=$post=$address=$city=$town=$dal=$apart=$mail=$number='';
            if(isset($_SESSION['member'])) {
                $login = $_SESSION['member']['login'];
                $pass = $_SESSION['member']['password'];
                $name = $_SESSION['member']['m_name'];
                $post = $_SESSION['member']['post'];
                $address = $_SESSION['member']['address'];
                $city = $_SESSION['member']['city'];
                $town = $_SESSION['member']['town'];
                $dal = $_SESSION['member']['dal'];
                $apart = $_SESSION['member']['apart'];
                $mail = $_SESSION['member']['mail'];
                $number = $_SESSION['member']['number'];
            }

            if(isset($_SESSION['member']['m_name'])){
                echo '<p class="name">',$name,'さんのアカウント情報</p><br>';
                echo '<p class="top">ログインID</p>';
                echo '<p>',$login,'</p>';
                echo '<p class="midasi">パスワード</p>';
                echo '<p>';
                for ($i=1;$i<strlen($pass);$i++) {
                    echo '●';
                }
                echo '</p>';  
                echo '<p class="midasi">住所</p>';
                echo '<p>〒',$post,'</p>';
                echo '<p class="midasi">都道府県</p>';
                echo '<p>',$address,'<p>';
                echo '<p class="midasi">市区町村</p>';
                echo '<p>',$city,'</p>';
                echo '<p class="midasi">町名</p>';
                echo '<p>',$town,'</p>';
                echo '<p class="midasi">番地<p>';
                echo '<p>',$dal,'</p>';
                echo '<p class="midasi">マンション名・号室</p>';
                echo '<p>',$apart,'</p>';
                echo '<p class="midasi">メールアドレス</p>';
                echo '<p>',$mail,'</p>'; 
                echo '<p class="midasi">電話番号</p>';
                echo '<p>',$number,'</p>';

                echo '<div class="toroku"><button class="toroku" onclick="location.href=\''.'account3.php'.'\'">変更する</button></div>';

            }else{
                echo '<p class="home">ログインしてください</p>';
                echo '<a href="../login/login.php" ><button class="home">ログイン画面へ</button></a>';
            }
        ?>
        <?php require '../home/footer.php'; ?>
    </div>
</body>
</html>