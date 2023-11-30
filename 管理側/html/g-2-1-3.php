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
            $_SESSION['Shohin2']=[
                's_name'=>$row['s_name'],
                's_id'=>$row['s_id'],
                'category'=>$row['category'],
                'price' => $row['price'],
                'image' => $row['image'],
                'setumei' => $row['setumei']
            ];
            echo '<form action="g-2-1-9.php" method="post">';
            echo '<div class="shohin">';
                echo '<table class="left">';
                echo '<tr>
                    <td class="td2"><p>商品名</p></td><td><p><input type="text" name="s_name" value=',$row['s_name'],'></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>商品ID</p></td><td><p><input type="text" name="s_id" value=',$row['s_id'],' readonly></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>カテゴリー</p></td><td><p><input type="text" name="category" value=',$row['category'],'></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>値段</p></td><td><p><input type="text" name="price" value=',$row['price'],'></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>画像パス</p></td><td><p><input type="text" name="pass" value=',$row['image'],'></p></td>
                </tr>';
                echo '</table>';
            echo '<textarea id="setumei" cols="50" rows="20" class="Ssetumei" name="explain">',$row['setumei'],'</textarea>';
        }

            echo '<div class="btn">';
                echo '<p><h3>在庫管理</h3></p>';
                echo '<p><input type="number" id="kosuu" value="1" class="textbox"></p>';
                echo '<div class="all button">';
                echo '<table>';
                    echo '<tr>';
                        echo '<td><button type="submit" class="sakujyo">削除</button></td>';
                        echo '<td><button type="submit" class="kousin">更新</button></td>';
                        echo '</form>';                    
                    echo '</tr>';
                echo '</table>';
                echo '</div>';
            echo '</div>';
    echo '</div>';
    ?>
    </div>
</body>
</html>