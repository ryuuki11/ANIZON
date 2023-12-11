<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>景品一覧【僕のヒーローアカデミア】</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/keihin.css">
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
    $sql->execute([$_GET['id']]);
    $j=0;
    foreach($sql as $row){
        echo '<body class="',$row['i_rank'],'">';
        $j++;
    }
    if($j==0){
        echo '<body class="else">';
    }
    echo '<div id="wrap">';
    require '../home/header_sazae.php';
    
echo '<div class="gacha">';
    $sql=$pdo->prepare('select image from Shohin where s_id=?');
    $sql->execute([$_GET['id']]);
    echo '<div class="top">';
    foreach($sql as $row){
        echo '<img src="',$row['image'],'" alt="noimage">';
    }
    echo '</div>';
    $sql=$pdo->prepare('select * from Prize where s_id=? order by rank asc');
    $sql->execute([$_GET['id']]);
    echo '<div class="image">';
    $i=1;
    foreach($sql as $row){
        if($row['rank']=='B'){
            echo '<div class="bc">';
        }
        echo '<div class="keihin',$i,'">';
        echo '<span class="',$row['rank'],'">',$row['rank'],'賞</span><span class="name">',$row['p_name'],'</span>';
        echo '<img src="',$row['image'],'" alt="noimage">';
        echo '</div>';
        if($row['rank']=='C'){
            echo '</div>';
        }
        $i++;
    }
    echo '</div>';

    $_SESSION['gacha']['id']=$_GET['id'];
    $sql=$pdo->prepare('select price from Shohin where s_id=?');
    $sql->execute([$_GET['id']]);
    foreach($sql as $row){
        $_SESSION['gacha']['price']=$row['price'];
    }
 ?>
 <form action="buy.php" method="post">
    <div class="kazu">
        <p>購入数を入力してください</p>
        <input type="number" class="num"  name="kazu" min="1" value="1">
    </div>
        <div  class="buy"><button type="submit">購入</button></div>
</form>

        <div  class="gachab"><a href="gacha.php"><button>ガチャへ</button></a></div>
        <div  class="back"><a href="gachaichiran.php"><button>ガチャ一覧へ</button></a></div>
</div>
<div class="ba"></div>
        <?php require '../home/footer.php'; ?>
        </div>
</body>
</html>