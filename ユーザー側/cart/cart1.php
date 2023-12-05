<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/cart1.css" />
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
if(isset($_SESSION['member']['m_name'])){

        echo '<div class="name">さんのカート</div>';
        echo '<hr>';

        $pdo = new PDO($connect, USER, PASS);
        $result = $pdo->query('select * from Cart inner join Shohin on Cart.s_id=Shohin.s_id');
        $_SESSION['check']=array();
        $array=array();
        echo '<form action="cart2.php" method="post">';
        if (!empty($result)) {
            $i=1;
            foreach ($result as $row) {
                if ($_SESSION['member']['id'] == $row['m_id']) {
                    echo '<div class="cart-shohin">';
                    echo '<input type="checkbox" class="checkbox 1" id="c1" name="check[]" value="' . $i. '">';
                    echo '<label for="c1" class="check">';
                    echo '<p class="date">' . $row["c_date"] . '</p>';
                    echo '<div class="ci">';
                    echo '<img src="' . $row["image"] . '" alt="">';
                    echo '</div>';
                    echo '<div class="syosai">';
                    echo '<p class="sname" id="s_name">' . $row["s_name"] . '</p>';
                    echo '<p class="sname" id="name"></p>';
                    echo '<p class="price"><span class="piece">数量：'.$row['c_piece'].'</span><span class=cprice>'. $row["price"]*$row['c_piece'] .'円</span></p>';
                    echo '<div class="btn">';
                    echo '<p><button type="submit" class="delete" name="delete"  formaction="cart-delete.php" value="' , $row['c_id'] . '">削除</button>';
                    echo '<button type="submit" class="buy" name="buy" value="',$row['c_id'],'">購入</button></p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</label>';
                    echo '</div>';
                    echo '<hr>';
                    
                    $_SESSION['check'][]=$row['s_id'];
                    $_SESSION['check'][]='false';
                    $_SESSION['check'][]=$row['c_id'];
                    $i+=3;
                }
            }
            
        } else {
            echo '<p class="cart">カートに商品がありません。</p>';
        }
    

        $pdo = null;
        

        echo '<div class="select">';
            echo '<button type="button" onClick="checkAll()">全選択</button>';
            echo '<button type="button" onClick="uncheckAll()">選択解除</button>';
        echo '</div>';

            echo'<button class="all" name="all" value="2">まとめて購入</button>';
        echo '</form>';
    }else{
        echo '<p class="home">ログインしてください</p>';
        echo '<a href="../login/login.php" ><button class="home">ログイン画面へ</button></a>';
    }
    ?>

<?php require '../home/footer.php'; ?>
</div>
<script>
    const a = document.getElementById('s_name');
    const b = document.getElementById('name');
    const c = a.textContent;
    const d = c.split(' ');
    a.textContent = d[0];
    b.textContent = d[1];

    const checkbox1 = document.getElementsByName("check[]");

    function checkAll() {
        for (i = 0; i < checkbox1.length; i++) {
            checkbox1[i].checked = true;
        }
    }

    function uncheckAll() {
        for (i = 0; i < checkbox1.length; i++) {
            checkbox1[i].checked = false;
        }
    }
</script>

</body>
</html>