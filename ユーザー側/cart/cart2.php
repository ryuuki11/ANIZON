<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/header_sazae.css" />
    <link rel="stylesheet" href="css/cart2.css" />
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

    echo '<div class="h">';
        echo '<div class="name">津隈さんのカート</div>';
        echo '<form action="cart1.php">';
        echo '<button>戻る</button>';
        echo '</form>';
        echo '</div>';
        echo '<hr>';
    // 接続確認
   $i=0;
    $array=$_POST['check'];
    foreach($array as $row){
        foreach($_SESSION['check'] as $key=>$value){
            echo $key;
            echo $i;
            if($key==$i){
            $judge=$row.$value='true';
            $_SESSION['check'][$key]='true';
            echo $key;
            echo $value;
            }
            $i++;
            
        }
        
    }
    // カートテーブルから商品情報を取得
    $pdo=new PDO($connect,USER,PASS);
    $result = $pdo->query('select *from Cart inner join Shohin on Cart.s_id=Shohin.s_id');

    if (!empty($result)){ 
        // 取得した商品情報を表示
        $total=0;
        $i=0;
        foreach($result as $row) {
            if($_POST['buy'] == $row['c_id'] || $i%2==0){
            foreach($_SESSION['check'] as $key=>$value){
                if($key==$i){
                if($value=='true'){
                    echo '<div class="cart-shohin">';
                    echo '<p class="date">' . $row['date'] . '</p>';
                    echo '<img src="' . $row['image'] . '" alt="">';
                    echo '<div class="syosai">';
                    echo '<p class="sname" id="s_name">' . $row['s_name'] . '</p>';
                    echo '<p class="sname" id="name"></p>';
                    echo '<p class="price">' . $row['price'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '<hr>';
                    $total+=$row['price'];
                }
            }
            $i+=2;
            }
            }
        }
        echo '<p class="allprice">合計',$total,'円</p>';   
    }

    ?>

    
    <form action="cart3.php"><button class="buy">
        支払い情報
    </button></form>
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