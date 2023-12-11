<?php session_start()?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/header_sazae.css" />
    <link rel="stylesheet" href="css/shosai.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <title>anizon</title>
</head>
    <body>
        <?php
    const SERVER = 'mysql219.phy.lolipop.lan';
    const DBNAME = 'LAA1518095-anizon';
    const USER = 'LAA1518095';
    const PASS = 'Pass0809';
    $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
    $pdo=new PDO($connect,USER,PASS);
    /*if(isset($_SESSION['shohin_shosai']['id'])){
        $sql=$pdo->prepare('insert into Cart (m_id,s_id,date) values(?,?,CURDATE())');
        $sql->execute([$_SESSION['member']['id'],$_SESSION['shohin']['id']]);
        echo 'カートに商品を追加しました';
        echo '<hr>';
        unset($_SESSION['shohin_shosai']['id']);
    }*/


    $sql=$pdo->prepare('select * from Shohin where s_id=?');
    $sql->execute([$_GET['id']]);
   
        foreach($sql as $row){
            $_SESSION['shohin_shosai']['id']=$row['s_id'];
            echo '<div class="shohin">';
                echo '<img src="',$row['image'],'" alt="">';
                echo '<div class="shosai">';
                    echo '<p class="name">',$row['s_name'],'</p>';
                    echo '<p class="setumei">',$row['setumei'],'</p>';
<<<<<<< HEAD
<<<<<<< HEAD
                    echo '<p class="price">金額：',$row['price'],'円</p>';
                    echo '<p>数量：<input type="number" min="1" class="piece" name="piece" value="1"><p>';
                    echo'<div><button class="cartb" name="cartb" value="',$_SESSION['chkno'],'">カートに入れる</button></div>';
=======
                    echo '<p class="price">',$row['price'],'</p>';
                    echo'<a href="shosai.php?id=',$row['s_id'],'"><button class="cart">カートに入れる</button></a>';
>>>>>>> ac4b04c3ad5a9b650f4f2c33cf27f2b82effe995
=======
                    echo '<p class="price">',$row['price'],'</p>';
                    echo'<a href="shosai.php?id=',$row['s_id'],'"><button class="cart">カートに入れる</button></a>';
>>>>>>> ac4b04c3ad5a9b650f4f2c33cf27f2b82effe995
                echo '</div>';
            echo '</div>';
        }
        ?>
        <a href="result.php">
        <button class="backb">
            検索画面へ
        </button>
        </a>
        <div>
    </body>
</html>