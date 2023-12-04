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
<?php
const SERVER = 'mysql219.phy.lolipop.lan';
const DBNAME = 'LAA1518095-anizon';
const USER = 'LAA1518095';
const PASS = 'Pass0809';
$connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
$pdo=new PDO($connect,USER,PASS);
if((!isset($_POST['name1']) || $_POST['name1']==="")||(!isset($_POST['sec']) || $_POST['sec']==="")||(!isset($_POST['num']) || $_POST['num']==="")){
    echo '<p class="error">すべての項目に入力してください</p>';
    echo '<div><a href="buy.php"><button type="submit" class="top">入力画面へ</button></a></div>';
}else{
        echo '<p class="name">',$_SESSION['member']['m_name'],'さん</p>';
            echo '<p class="order">購入完了です</p>';
            unset($_SESSION['gacha']['num']);
    
            
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
            
      
        

        echo '<div><a href="gacha.php"><button type="submit" class="top">ガチャへ</button></a></div>';
}
        require "../home/footer.php";
        ?>
        </div>
</body>
</html>