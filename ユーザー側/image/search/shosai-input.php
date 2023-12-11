<?php session_start()?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/shosai.css" />
    <link rel="stylesheet" href="../home/css/header_search.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>anizon</title>
</head>
    <body>
    <div id="wrap">
    <?php require '../home/header_search.php'; ?>
        <?php
    const SERVER = 'mysql219.phy.lolipop.lan';
    const DBNAME = 'LAA1518095-anizon';
    const USER = 'LAA1518095';
    const PASS = 'Pass0809';
    $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
    $pdo=new PDO($connect,USER,PASS);

    if(isset($_SESSION['member']['id'])){
        $sql=$pdo->prepare('insert into Cart (m_id,s_id,c_date,c_piece) values(?,?,CURRENT_DATE(),?)');
        $sql->execute([$_SESSION['member']['id'],$_SESSION['shohin_shosai']['id'],$_POST['piece']]);
        echo 'カートに商品を追加しました';
        echo '<hr>';


        $sql=$pdo->prepare('select * from Shohin where s_id=?');
        $sql->execute([$_GET['id']]);
            foreach($sql as $row){
                $_SESSION['shohin_shosai']['id']=$row['s_id'];
                echo '<div class="shohin">';
                echo '<div class="ci">';
                echo '<img src="' . $row["image"] . '" alt="">';
                echo '</div>';
                    echo '<form action="shosai-input" method="post">';
                    echo '<div class="shosai">';
                        echo '<p class="name">',$row['s_name'],'</p>';
                        echo '<p class="setumei">',$row['setumei'],'</p>';
                        echo '<p class="price">金額：',$row['price'],'円</p>';
                        echo '<p>数量：<input type="text" class="piece" name="piece" value="1"><p>';
                        echo'<div><button class="cart">カートに入れる</button></div>';
                    echo '</div>';
                    echo '</form>';
                echo '</div>';
            }
            
            echo '<a href="result.php">';
            echo '<button class="backb">検索画面へ</button>';
            echo '</a>';
        echo '<div>';
    }else{
        echo '<p class="home">ログインしてください</p>';
        echo '<a href="../login/login.php" ><button class="home">ログイン画面へ</button></a>';
    }
    ?>
    <?php require '../home/footer.php'; ?>
    </div>
    </body>
</html>