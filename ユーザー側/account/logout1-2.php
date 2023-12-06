<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="../home/css/header_sazae.css" />
    <link rel="stylesheet" href="css/order.css" />
    <link rel="stylesheet" href="../home/css/footer.css" />
    <title>anizon</title>
</head>
<body>
    <div id="wrap">
        <?php require '../home/header_sazae.php'; ?>
            <?php $_SESSION=array(); ?>
            <p class="logout">ログアウトしました</p>
            <button class="logoutb1" onclick="location.href='../login/login.php'">
            ログイン画面へ
            </button>
            <?php require '../home/footer.php'; ?>
    </div>
</body>
</html>