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

     if(isset($_SESSION['member2'])){
        $sql=$pdo->prepare('insert into Member values(null,?,?,?,?,?,?,?,?,?,?,?,0)');
        $sql->execute([
                $_SESSION['member2']['login'],$_SESSION['member2']['password'],$_SESSION['member2']['m_name'],$_SESSION['member2']['post'],$_SESSION['member2']['address'],$_SESSION['member2']['city'],$_SESSION['member2']['town'],$_SESSION['member2']['dal'],$_SESSION['member2']['apart'],$_SESSION['member2']['mail'],$_SESSION['member2']['number']]);
            echo '<p class="top">お客様情報を登録しました。</p>';
            echo '<button onclick="location.href=',"'../home/home.php'",'">ホーム</button>';
    }

?>
<?php require '../home/footer.php'; ?>
    </div>
    </body>
</html>