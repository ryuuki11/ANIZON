<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/g-2-2-1.css" />
    <title>Document</title>
</head>
<body>
        <form action="g-1-1-2.php" method="post">
            <button type="submit" class="back">戻る</button>
        </form>
        <form action="g-1-1-1.php" method="post">
            <button type="submit" class="rogout">ログアウト</button>
        </form>
    <h1>anizon</h1>
    <?php
    if (isset($_GET['deleteflag'])) {
        echo '<div class="message">会員番号：',$_GET['deleteflag'],'の情報を削除しました。';
    }
    ?>
        </table>
    </div>
    <?php
                        const SERVER = 'mysql219.phy.lolipop.lan';
                        const DBNAME = 'LAA1518095-anizon';
                        const USER = 'LAA1518095';
                        const PASS = 'Pass0809';
                   
                        $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
                        $pdo=new PDO($connect,USER,PASS);
                        $sql=$pdo->query('select * from Member');
                        echo '<table cellpadding="50" boder class="example">';
                        echo '<tr class="boder">';
                        echo '<th class="boder m_id">ログインID</th>';
                        echo '<th class="boder login">会員ID</th>';
                        echo '</tr>';
                        foreach($sql as $row){
                            echo '<tr class="boder">';
                            echo '<td class="boder"><a href="g-2-2-2.php?id=', $row['m_id'], '">',$row['login'],'</a></td>';
                            echo '<td class="boder">',$row['m_id'],'</td>';
                            echo '</tr>';
                        }
 
 
                        if(isset($_POST['kaiin'])){
                            $sql=$pdo-prepare('inset into Member value(?,?,?,?,?,?,?);');
                            $pdo->execute($_SESSION['Member']['password'],$_SESSION['Member']['m_name'],$_SESSION['Member']['post'],$_SESSION['Member']['ddress'],$_SESSION['Member']['apart'],$_SESSION['Member']['mail'],$_SESSION['Member']['number']);
                        }else if(isset($_POST['Akaiin'])){
                            $sql=$pdo-prepare('inset into Member value(?,?,?,?,?,?,?);');
                            $pdo->execute($_SESSION['Member']['password'],$_SESSION['Member']['m_name'],$_SESSION['Member']['post'],$_SESSION['Member']['ddress'],$_SESSION['Member']['apart'],$_SESSION['Member']['mail'],$_SESSION['Member']['number']);
                        }
               
           
            ?>
</body>
</html>