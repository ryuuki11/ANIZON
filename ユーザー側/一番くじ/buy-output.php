<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/buy-output.css">
    <title>login</title>
</head>
<body>
        <p class="name">○○○○○○○○○○さん</p>
            <p class="order">購入完了です</p>

        <?php
    
            const SERVER = 'mysql219.phy.lolipop.lan';
            const DBNAME = 'LAA1518095-anizon';
            const USER = 'LAA1518095';
            const PASS = 'Pass0809';
            $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
            $pdo=new PDO($connect,USER,PASS);
            if($_SESSION['flag']==1){
                $sql=$pdo->prepare('insert into Buy (m_id) values (?)');
                $sql->execute([$_SESSION['member']['id']]);
                $sql=$pdo->query('select * from Buy order by date desc');
                $num=0;
                foreach($sql as $row){
                    $num=$row['b_id'];
                }
                $sql=$pdo->prepare('select * from Shohin where s_id=?');
                $sql->execute([$_SESSION['gacha']['id']]);
                $s_name='';
                $s_image='';
                foreach($sql as $row){
                    $s_name=$row['s_name'];
                    $s_image=$row['image'];
                }
                $sql=$pdo->prepare('insert into Orderhistory (b_id,s_id,s_name,s_image,o_piece,o_price) values(?,?,?,?,?,?)');
                $sql->execute([$num,$_SESSION['gacha']['id'],$s_name,$s_image,$_SESSION['gacha']['num'],$_SESSION['gacha']['price']]);
            }
            
      
        ?>

        <div><a href="gacha.php"><button type="submit" class="top">ガチャへ</button></a></div>
</body>
</html>