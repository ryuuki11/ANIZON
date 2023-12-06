<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/g-2-2-2.css" />
    <title>Document</title>
</head>
<body>
    <form action="g-2-2-1.php" method="post">
            <button type="submit" class="back">戻る</button>
        </form>
    <form action="g-1-1-1.php" method="post">
        <button type="submit" class="rogout">ログアウト</button>
    </form>
    <h1>anizon</h1>
    <div class="client">
        </table>
    </div>
    <div class="delete">
        <form action="g-2-2-2-1.php" method="post">
            <button type="submit" class="sakujyo">アカウント削除</button>
        </form>
    </div>
    <?php
                        const SERVER = 'mysql219.phy.lolipop.lan';
                        const DBNAME = 'LAA1518095-anizon';
                        const USER = 'LAA1518095';
                        const PASS = 'Pass0809';
                   
                        $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
                        $pdo=new PDO($connect,USER,PASS);
                        $sql=$pdo->prepare('select * from Member where m_id=?');
                        $sql->execute([$_GET['id']]);
                        foreach($sql as $row){
                            $_SESSION['Member']=[
                                'm_id'=>$row['m_id'],
                                'm_name'=>$row['m_name'],
                                'password'=>$row['password'],
                                'address' => $row['address'],
                                'city' => $row['city'],
                                'town' => $row['town'],
                                'dal' => $row['dal'],
                                'apart' => $row['apart'],
                                'post' => $row['post'],
                                'mail' => $row['mail'],
                                'number' => $row['number']
                            ];

                        echo '<table cellpadding="10" boder class="example">';
                        echo '<tr>
                            <th class="boder"><p class="font">名前</p></th><td class="boder2"><p> ',$row['m_name'],'</p></td>
                        </tr>';
                        echo '<tr>
                            <th class="boder"><p class="font">会員ID</p></th><td class="boder2"><p> ',$row['m_id'],'</p></td>
                        </tr>';
                        echo '<tr>
                            <td class="boder"><p class="font">パスワード</p></th><td class="boder2"><p> ',$row['password'],' </p></td>
                        </tr>';
                        echo '<tr>
                            <td class="boder"><p class="font">住所</p></th><td class="boder2"><p> ',$row['address'],$row['city'],$row['town'],$row['dal'],$row['apart'],'</p></td>
                        </tr>';
                        echo '<tr>
                            <td class="boder"><p class="font">郵便番号</p></th><td class="boder2"><p> ',$row['post'],'</p></td>
                        </tr>';
                        echo '<tr>
                            <td class="boder"><p class="font">メールアドレス</p></th><td class="boder2"><p> ',$row['mail'],'</p></td>
                        </tr>';
                        echo '<tr>
                            <td class="boder"><p class="font">電話番号</p></th><td class="boder2"><p> ',$row['number'],'</p></td>
                        </tr>';
                        }
 
            ?>
</body>
</html>