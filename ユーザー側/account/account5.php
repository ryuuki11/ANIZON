<?php session_start(); ?>
<?php require '../db_connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/account5.css">
    <title>変更完了</title>
</head>
<body>
    <?php
    $pdo=new PDO($connect,USER,PASS);
    $id=$_SESSION['member']['id'];
    $sql=$pdo->prepare('select * from Member where m_id!=? and login=?');
    $sql->execute([$id,$_POST['login']]);

    if (empty($sql->fetchAll())) {
        $sql=$pdo->prepare('update Member set login=?,password=?,m_name=?,post=?,address=?,apart=?,mail=?,number=?'.' where m_id=?');
            $sql->execute([
                $_POST['login'],$_POST['password'],$_POST['name'],$_POST['post'],$_POST['address'],$_POST['apart'],$_POST['mail'],$_POST['number'],$_SESSION['member']['id']
            ]);
    }else{
        echo 'ログイン名がすでに使用されていますので、変更してください。';
    }

        echo 'お客様情報を更新しました。';
    ?>
      
    <div><button class="login" onclick="location.href='../login/login.php'">ログインページへ</button></div>
</body>
</html>