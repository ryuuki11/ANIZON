<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細画面</title>
    <link rel="stylesheet" href="../css/g-2-1-3.css" />
</head>
<body>
    <div class="right-top">
        <form action="g-1-1-1.php" method="post">
            <button type="submit" class="rogout">ログアウト</button>
        </form>
    </div>
    <h1>anizon</h1>
    <h2>商品詳細</h2><br>
    <?php

        const SERVER = 'mysql219.phy.lolipop.lan';
        const DBNAME = 'LAA1518095-anizon';
        const USER = 'LAA1518095';
        const PASS = 'Pass0809';

        $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
        $pdo=new PDO($connect,USER,PASS);
        $sql=$pdo->prepare('select * from Shohin where s_id=?');
        $sql->execute([$_GET['id']]);

        foreach($sql as $row){
    echo '<div class="shohin">';
            echo '<div class="shosai">';
                echo '<p><input type="text" id="name" value=',$row['s_id'],'></p>';
                echo '<p><input type="text" id="category" value=',$row['category'],'></p>';
                echo '<p><input type="text" id="price" value=',$row['price'],'></p>';
                echo '<p><input type="text" id="pass" value=',$row['image'],'></p>';
            echo '</div>';
                echo '<textarea id="setumei" cols="50" rows="20" value=',$row['setumei'],' class="Ssetumei"></textarea>';
        }

            echo '<div class="btn">';
                echo '<p><h3>在庫管理</h3></p>';
                echo '<p><input type="number" id="kosuu" value="1" class="textbox"></p>';
                echo '<table>';
                    echo '<tr>';
                        echo '<form action="g-2-1-9.php" method="post">';
                            echo '<td><button type="submit" class="sakujyo">削除</button></td>';
                        echo '</form>';
                        echo '<form action="g-2-1-8.php" method="post">';
                            echo '<td><button type="submit" class="kousin">更新</button></td>';
                        echo '</form>';                    
                    echo '</tr>';
                echo '</table>';
            echo '</div>';
    echo '</div>';
    ?>
    </div>
</body>
</html>