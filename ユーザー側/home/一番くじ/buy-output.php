<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/buy-output.css">
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>login</title>
</head>
<body>
<div id="wrap">
<?php require '../home/header_sazae.php'; ?>
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
                $sql=$pdo->prepare('insert into Buy (m_id,date) values (?,CURRENT_DATE())');
                $sql->execute([$_SESSION['member']['id']]);
                $sql=$pdo->query('select * from Buy order by b_id desc');
                $num=0;
                $i=0;
                foreach($sql as $row){
                    if($i!=0){
                        break;
                    }
                    $num=$row['b_id'];
                    $i++;
 }
                $sql=$pdo->prepare('select * from Shohin where s_id=?');
                $sql->execute([$_SESSION['gacha']['id']]);
                $s_name='';
                $s_image='';
                foreach($sql as $row){
                    $s_name=$row['s_name'];
                    $s_image=$row['image'];
                }
                $price=$_SESSION['gacha']['num']*$_SESSION['gacha']['price'];
                $sql=$pdo->prepare('insert into Orderhistory (b_id,s_id,s_name,s_image,o_piece,o_price) values(?,?,?,?,?,?)');
                $sql->execute([$num,$_SESSION['gacha']['id'],$s_name,$s_image,$_SESSION['gacha']['num'],$price]);
            }
            
      
        ?>

        <div><a href="gacha.php"><button type="submit" class="top">ガチャへ</button></a></div>
        <?php require '../home/footer.php'; ?>
        </div>
</body>
</html>