<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>景品詳細画面</title>
    <link rel="stylesheet" href="../css/g-2-1-3.css" />
</head>
<body>
    <div class="right-top">
        <form action="g-1-1-1.php" method="post">
            <button type="submit" class="rogout">ログアウト</button>
        </form>
    </div>
    <h1>anizon</h1>
    <h2>景品詳細</h2><br>
    <?php

        const SERVER = 'mysql219.phy.lolipop.lan';
        const DBNAME = 'LAA1518095-anizon';
        const USER = 'LAA1518095';
        const PASS = 'Pass0809';

        $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
        $pdo=new PDO($connect,USER,PASS);
        $sql=$pdo->prepare('select * from Prize where p_id=?');
        $sql->execute([$_GET['id']]);
        foreach($sql as $row){
            $_SESSION['Prize2']=[
                'p_name'=>$row['p_name'],
                'p_id'=>$row['p_id'],
                'rank' => $row['rank'],
                'category' => $row['category'],
                'image'=>$row['image'],
                'setumei'=>$row['setumei']
            ];
    echo '<form action="g-2-1-7.php" method="post">';
    echo '<div class="shohin">';
                echo '<table class="left">';
                echo '<tr>
                    <td class="td2"><p>景品名</p></td><td><p><input type="text" name="p_name" value=',$row['p_name'],'></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>景品ID</p></td><td><p><input type="text" name="p_id" value=',$row['p_id'],' readonly ></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>ランク</p></td><td><p><input type="text" name="rank" value=',$row['rank'],'></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>カテゴリー</p></td><td><p><input type="text" name="category" value=',$row['category'],'></p></td>
                </tr>';
                echo '<tr>
                    <td class="td2"><p>画像パス</p></td><td><p><input type="text" name="image" value=',$row['image'],'></p></td>
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
                            echo '<td><button type="submit" class="Psakujyo" name="sakujo">削除</button></td>';
                            echo '<td><button type="submit" class="Pkousin" name="kousin">更新</button></td>';
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