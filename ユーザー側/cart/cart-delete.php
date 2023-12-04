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
$pdo = new PDO($connect, USER, PASS);

if (isset($_POST['delete'])) {
    $pdo = new PDO($connect, USER, PASS);
    // Select data from Cart table based on c_id
    $sql = $pdo->prepare('SELECT * FROM Cart WHERE c_id = ?');
    $sql ->execute([$_POST['delete']]);
    
    // Check if the row is found
    foreach($sql as $row) {
        $m_id = $row['m_id'];
        $s_id = $row['s_id'];
    }

        // Delete the row from Cart table based on c_id, m_id, and s_id
        $sql_delete = $pdo->prepare('DELETE FROM Cart WHERE c_id = ? AND m_id = ? AND s_id = ?');
        $sql_delete->execute([$_POST['delete'], $m_id, $s_id]);

        echo 'カートから商品を削除しました。';
        echo '<hr>';
}

echo '<div class="name">津隈さんのカート</div>';
echo '<hr>';


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
            echo '<p class="date">' . $row["date"] . '</p>';
            echo '<img src="' . $row["image"] . '" alt="">';
            echo '<div class="syosai">';
            echo '<p class="sname" id="s_name">' . $row["s_name"] . '</p>';
            echo '<p class="sname" id="name"></p>';
            echo '<p class="price"><div class="piece">'.$row['c_piece'].'</div><div>'. $row["price"]*$row['c_piece'] .'</div></p>';
            echo '<div class="btn">';
            echo '<p><button type="submit" class="delete" name="delete"  formaction="cart-delete.php" value="' , $row['c_id'] . '">削除</button>';
            echo '<button type="submit" class="buy" name="buy">購入</button></p>';
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
    echo "カートに商品がありません。";
}


$pdo = null;
?>



<div class="select">
    <button type="button" onClick="checkAll()">全選択</button>
    <button type="button" onClick="uncheckAll()">選択解除</button>
</div>

    <button class="all">まとめて購入</button>
</form>
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