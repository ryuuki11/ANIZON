<?php session_start();?>
<?php require '../db_connect.php'; ?>
<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/toroku.css">
    <link rel="stylesheet" href="../home/css/header_title.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>アカウント情報</title>
</head>
<body>

<div id="wrap">
        <?php require '../home/header_title.php'; ?>
<?php
$pdo=new PDO ($connect,USER,PASS);

     if(isset($_SESSION['member'])){
        $sql=$pdo->prepare('insert into Member values(null,?,?,?,?,?,?,?,?,?,?,?,0)');
        $sql->execute([
                $_SESSION['member']['login'],$_SESSION['member']['password'],$_SESSION['member']['m_name'],$_SESSION['member']['post'],$_SESSION['member']['address'],$_SESSION['member']['city'],$_SESSION['member']['town'],$_SESSION['member']['dal'],$_SESSION['member']['apart'],$_SESSION['member']['mail'],$_SESSION['member']['number']]);
            echo '<p class="top">お客様情報を登録しました。</p>';
            echo '<button onclick="location.href=',"'../home/home.php'",'">ホーム</button>';
    }

?>
<?php require '../home/footer.php'; ?>
    </div>
    </body>
</html>