<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/order.css" />
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>anizon</title>
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

            if(isset($_SESSION['member'])){
                echo '<div class="button"><a href="../home/home.php"><button>戻る</button></a></div>';
                echo '<div class="name">',$_SESSION['member']['m_name'],'さんの注文履歴</div>';
                echo '<hr>';
                $sql = $pdo->query('select * from Buy inner join Orderhistory on Buy.b_id=Orderhistory.b_id');
                $i=0;
                $id=0;
                $j=0;
                $rows=$sql->fetchAll(PDO::FETCH_ASSOC);
                if (!empty($rows)){
                    foreach($rows as $row){
                        if($i!=0 && $row['b_id']!=$id && $j==1){
                            echo '<hr>';
                        }
                        if($row['m_id']==$_SESSION['member']['id']){
                            echo '<div class="order-shohin">';
                            echo '<p class="date">',$row['date'],'</p>';
                            echo '<div class="ci">';
                            echo '<img src="',$row['s_image'],'" alt="">';
                            echo '</div>';
                            echo '<div class="syosai">';
                            echo '<p class="sname">',$row['s_name'],'</p>';
                            echo '<p class="price"><span class="piece">数量：'.$row['o_piece'].'</span><span class=cprice>　　'. $row["o_price"].'円</span></p>';
                            echo '</div>';
                            echo '</div>';
                            $j=1;
                            $i++;
                            $id=$row['b_id'];
                        }else{
                            $j=0;
                        }
                    }
                    echo '<hr>';

                }
                if($i==0){
                    echo '<p>注文履歴がありません</P>';
                }
            
                echo '<div class="button2"><button class="back">戻る</button></div>';

            }else{
                echo '<div class="home">';
                echo '<p class="home">ログインしてください</p>';
                echo '<a href="../login/login.php" ><button class="home">ログイン画面へ</button></a>';
                echo '</div>';
            }
        ?>
        <?php require '../home/footer.php'; ?>
    </div>
</body>
</html>