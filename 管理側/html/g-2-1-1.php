<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="../css/g-2-1-1.css" />
</head>
<body>
        <h1>anizon</h1><br>
        <h2>商品一覧</h2><br>
                <form action="g-2-1-4.php" method="post">
                    <button type="submit" class="keihin">景品</button>
                </form>
            <div class="button">
                <table class="top">
                    <tr>
                        <form action="g-2-1-2.php" method="post">
                            <td><button type="submit" class="syouhintouroku">商品登録</button></td>
                        </form>
                        <form action="g-1-1-1.php" method="post" class="rogout">
                            <td><button type="submit" class="rogout">ログアウト</button></td>
                        </form>
                    </tr>
                </table>
            </div>
            <?php
                        const SERVER = 'mysql219.phy.lolipop.lan';
                        const DBNAME = 'LAA1518095-anizon';
                        const USER = 'LAA1518095';
                        const PASS = 'Pass0809';
                    
                        $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
                        $pdo=new PDO($connect,USER,PASS);
                        $sql=$pdo->query('select * from Shohin');
                        echo '<table cellpadding="50" boder class="example">';
                        echo '<tr class="boder">';
                        echo '<th class="boder name">商品名</th>';
                        echo '<th class="boder price">値段</th>';
                        echo '<th class="boder category">カテゴリー</th>';
                        echo '</tr>';
                        foreach($sql as $row){
                        echo '<tr class="boder">';
                        echo '<td class="boder"><a href="g-2-1-3.php?id=', $row['s_id'], '">',$row['s_name'],'</a></td>';
                        echo '<td class="boder">',$row['price'],'</td>';
                        echo '<td class="boder">',$row['category'],'</td>';
                        echo '</tr>';
                        }
                
                echo '</table>';


                    if(isset($_POST['toroku'])){
                        $sql=$pdo-prepare('inset into Shohin value(?,?,?,?,?,?);');
                        $pdo->execute($_SESSION['Shohin']['name'],$_SESSION['Shohin']['category'],$_SESSION['Shohin']['explain'],$_SESSION['Shohin']['price'],$_SESSION['Shohin']['stock'],$_SESSION['Shohin']['pass']);
                    }else if(isset($_POST['Ktoroku'])){
                        $sql=$pdo-prepare('inset into Prize value(?,?,?,?,?,?);');
                        $pdo->execute($_SESSION['Prize']['name'],$_SESSION['Prize']['category'],$_SESSION['Prize']['explain'],$_SESSION['Prize']['price'],$_SESSION['Prize']['stock'],$_SESSION['Prize']['pass']);
                    }
            
            ?>
</body>
</html>