<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>当選景品</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/sampletousen.css">
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
</head>
    <?php
        const SERVER = 'mysql219.phy.lolipop.lan';
        const DBNAME = 'LAA1518095-anizon';
        const USER = 'LAA1518095';
        const PASS = 'Pass0809';
        $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
        $pdo=new PDO($connect,USER,PASS);
        $sql=$pdo->prepare('select b_id from Buy where m_id=?');
        $sql->execute([$_SESSION['member']['id']]);
        $data=array();
        $i=0;
        foreach($sql as $row){
            $data[$i]=$row['b_id'];
            $i++;
        }
        $i=0;
        $sql=$pdo->prepare('select * from Orderhistory where s_id=?');
        $sql->execute([$_SESSION['gacha']['id']]);
        $num=0;
        $k=0;
        foreach($sql as $row){
            if($k==0){
                for($j=0;$j<count($data);$j++){
                    if($data[$j]==$row['b_id'] && ($row['o_piece']>$row['count'])){
                        $count=$row['count']+1;
                        $SQL=$pdo->prepare('update Orderhistory set count=? where o_id=?');
                        $SQL->execute([$count,$row['o_id']]);
                        break;
                        $k=1;
                    }
                }
            }
        }

        $sql=$pdo->prepare('select i_rank from image where s_id=?');
        $sql->execute([$_SESSION['gacha']['id']]);
        $j=0;
        foreach($sql as $row){
            echo '<body class="',$row['i_rank'],'">';
            $j++;
        }
        if($j==0){
            echo '<body class="else">';
        }
        require '../home/header_sazae.php';
        echo '<div id="wrap">';

        $sql=$pdo->prepare('select image from Prize where s_id=? and rank=?');
        $sql->execute([$_SESSION['gacha']['id'],$_SESSION['gacha']['rank']]);
        $image='';
        foreach($sql as $row){
            $image=$row['image'];
        }
        echo '<h1 class="',$_SESSION['gacha']['rank'],'">',$_SESSION['gacha']['rank'],'賞</h1>';
        echo '<div class="box">';
            echo '<div class="img1">';
                echo '<img  class="c" src="',$image,'" alt="noimage">';
            echo '</div>';
            echo '<img class="d" src="',$image,'" alt="noimage">';
        echo '</div>';
        ?>
        <div class="nextb"><a href="place.php" class="next"><button>住所確認へ</button></a></div>
        <div class="ba"></div>
        <?php require '../home/footer.php'; ?>
    </div>
</body>
</html>