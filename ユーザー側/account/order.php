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
    
            echo '<div class="name">○○さんの注文履歴</div>';
                echo '<hr>';

            $pdo=new PDO($connect,USER,PASS);    
            $sql = $pdo->query('select * from Buy inner join Orderhistory on Buy.b_id=Orderhistory.b_id');
            $i=0;
            $id=0;
            foreach($sql as $row){
                if($i!=0 && $row['b_id']!=$id){
                    echo '<hr>';
                }
                echo '<div class="order-shohin">';
                    echo '<p class="date">',$row['date'],'</p>';
                    echo '<img src="',$row['s_image'],'" alt="">';
                    echo '<div class="syosai">';
                        echo '<p class="sname">',$row['s_name'],'</p>';
                        echo '<p class="price"><span class="piece">数量：'.$row['o_piece'].'</span><span class=cprice>'. $row["o_price"].'円</span></p>';
                    echo '</div>';
                echo '</div>';
                $i++;
                $id=$row['b_id'];
            }
                echo '<hr>';
    
    ?>
                
                <button class="back">
                    戻る
                </button>
                <?php require '../home/footer.php'; ?>
                </div>
    </body>
</html>