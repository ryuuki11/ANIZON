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

    $sql=$pdo->prepare('select image from Prize where s_id=? and rank=?');
    $sql->execute([$_SESSION['gacha']['id'],$_SESSION['gacha']['rank']]);
    $image='';
    foreach($sql as $row){
        $image=$row['image'];
    }
    echo '<h1 class="',$_SESSION['gacha']['rank'],'">',$_SESSION['gacha']['rank'],'賞</h1>';
    echo '<div class="box">';
        echo '<div class="img">';
            echo '<img  class="c" src="',$image,'" alt="noimage">';
        echo '</div>';
        echo '<img class="d" src="',$image,'" alt="noimage">';
    echo '</div>';
    ?>
    <div class="nextb"><a href="place.php" class="next"><button>次へ</button></a></div>
    <?php require '../home/footer.php'; ?>
</body>
</html>