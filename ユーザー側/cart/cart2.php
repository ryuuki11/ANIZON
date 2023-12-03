<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/cart2.css" />
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

    echo '<div class="h">';
        echo '<div class="name">津隈さんのカート</div>';
        echo '<form class="btn2" action="cart1.php">';
        echo '<button>戻る</button>';
        echo '</form>';
        echo '</div>';
        echo '<hr>';

    // 接続確認
    $array=$_POST['check'];
    foreach($array as $row){
        foreach($_SESSION['check'] as $key=>$value){
            $j=0;
            if($key==$row){
                $_SESSION['check'][$row]='true';
                $j=1;
                break;
            }
            
            
        }
        
    }
    // カートテーブルから商品情報を取得
    $pdo=new PDO($connect,USER,PASS);
    $result = $pdo->query('select *from Cart inner join Shohin on Cart.s_id=Shohin.s_id');

    if (!empty($result)){ 
        // 取得した商品情報を表示
        $total=0;
        foreach($result as $row) {
            foreach($_SESSION['check'] as $key=>$value){
                if($value=='true'){
                    $j=$key+1;
                    if($_SESSION['check'][$j]==$row['c_id']){
                        $price=$row["price"]*$row["c_piece"];
                        echo '<div class="cart-shohin">';
                        echo '<p class="date">' . $row['c_date'] . '</p>';
                        echo '<div class="ci">';
                        echo '<img src="' . $row["image"] . '" alt="">';
                        echo '</div>';
                        echo '<div class="syosai">';
                        echo '<p class="sname" id="s_name">' . $row['s_name'] . '</p>';
                        echo '<p class="sname" id="name"></p>';
                        echo '<p class="price"><span class="piece">数量：'.$row['c_piece'].'</span><span class=cprice>'. $row["price"]*$row['c_piece'] .'円</span></p>';
                        echo '</div>';
                        echo '</div>';
                        echo '<hr>';
                        $total+=$price;
                    }
                }
            }
        }
        echo '<p class="allprice">合計',$total,'円</p>';   
    }

    ?>

    
    <form class="bottom" action="cart3.php"><button class="buy">
        支払い情報
    </button></form>

    <?php require '../home/footer.php'; ?>
    </div>
    <script>
        const a =document.getElementById('s_name');
        const b =document.getElementById('name');
        const c =a.textContent;
        const d =c.split(' ');
        a.textContent=d[0];
        b.textContent=d[1];
        </script>
</body>
</html>