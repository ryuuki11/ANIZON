<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/header_sazae.css" />
    <link rel="stylesheet" href="css/cart1.css" />
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

echo '<div class="name">津隈さんのカート</div>';
echo '<hr>';

$pdo = new PDO($connect, USER, PASS);
$result = $pdo->query('select * from Cart inner join Shohin on Cart.s_id=Shohin.s_id');
$_SESSION['check']=array();
$array=array();
echo '<form action="cart2.php" method="post">';
if (!empty($result)) {
    $i=0;
    foreach ($result as $row) {
        if ($_SESSION['member']['id'] == $row['m_id']) {
            echo '<div class="cart-shohin">';
            echo '<input type="checkbox" class="checkbox 1" id="c1" name="check[]" value="' . $row["c_id"] . '">';
            echo '<label for="c1" class="check">';
            echo '<p class="date">' . $row["date"] . '</p>';
            echo '<img src="' . $row["image"] . '" alt="">';
            echo '<div class="syosai">';
            echo '<p class="sname" id="s_name">' . $row["s_name"] . '</p>';
            echo '<p class="sname" id="name"></p>';
            echo '<p class="price">' . $row["price"] . '</p>';
            echo '<div class="btn">';
            echo '<p><button type="submit" class="delete"  onClick="form name="delete" "cart-delete.php" value="' , $row['c_id'] . '">削除</button>';
            echo '<button type="submit" class="buy" name="buy" onClick="form.action="cart2.php" value="' . $row['c_id'] . '">購入</button></p>';
            echo '</div>';
            echo '</div>';
            echo '</label>';
            echo '</div>';
            echo '<hr>';
            $_SESSION['check'][]='false';
            $_SESSION['check'][]=$row['s_id'];
        }
    }
    
} else {
    echo "カートに商品がありません。";
}


$pdo = null;
?>

<div class="select">
    <button onClick="checkAll()" href="#">全選択</button>
    <button onClick="uncheckAll()" href="#">選択解除</button>
</div>

    <button class="all">まとめて購入</button>
</form>

<script>
    const a = document.getElementById('s_name');
    const b = document.getElementById('name');
    const c = a.textContent;
    const d = c.split(' ');
    a.textContent = d[0];
    b.textContent = d[1];
    const checkbox1 = document.getElementsByName("check");

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