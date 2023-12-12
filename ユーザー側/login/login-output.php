<?php session_start(); ?>
<?php require '../db_connect.php'; ?>
<?php
unset($_SESSION['member']);
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('select * from Member where login=?');
$sql->execute([$_POST['login']]);
foreach ($sql as $row) {
    if($_POST['password']==$row['password']) {
        $_SESSION['member']=[
            'login'=>$row['login'],
            'password'=>$row['password'],
            'm_name' => $row['m_name'],
            'post' => $row['post'],
            'address' => $row['address'],
            'city' => $row['city'],
            'town' =>$row['town'],
            'dal' =>$row['dal'],
            'apart' => $row['apart'],
            'mail' => $row['mail'],
            'number' => $row['number'],
            'id' =>$row['m_id']
        ];
    }
}


if (empty($_POST['login']) and empty($_POST['password'])) {
    echo '
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ログイン</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="../home/css/header_sazae.css">
        <link rel="stylesheet" href="../home/css/footer.css">
    </head>
    <body>
    <div id="wrap">';
    require '../home/header_title.php';
    echo '<p class="error">ログインIDとパスワードを入力してください。</p>';
    echo '<div class="backb"><a href="login.php"><button class="back">ログイン画面へ</button></a></div>';
    require '../home/footer.php';
    echo '
    </div>
    </body>
    </html>';
}else if (empty($_POST['login'])) {
    echo '
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ログイン</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="../home/css/header_sazae.css">
        <link rel="stylesheet" href="../home/css/footer.css">
    </head>
    <body>
    <div id="wrap">';
    require '../home/header_title.php';
    echo '<p class="error">ログインIDを入力してください。</p>';
    echo '<div class="backb"><a href="login.php"><button class="back">ログイン画面へ</button></a></div>';
    require '../home/footer.php';
    echo '
    </div>
    </body>
    </html>';
}else if (empty($_POST['password'])) {
    echo '
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ログイン</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="../home/css/header_sazae.css">
        <link rel="stylesheet" href="../home/css/footer.css">
    </head>
    <body>
    <div id="wrap">';
    require '../home/header_title.php';
    echo '<p class="error">パスワードを入力してください。</p>';
    echo '<div class="backb"><a href="login.php"><button class="back">ログイン画面へ</button></a></div>';
    require '../home/footer.php';
    echo '
    </div>
    </body>
    </html>';
}else if (isset($_SESSION['member'])) {
    header('Location: ../home/home.php');
}else{
    echo '
    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ログイン</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="../home/css/header_sazae.css">
        <link rel="stylesheet" href="../home/css/footer.css">
    </head>
    <body>
    <div id="wrap">';
    require '../home/header_title.php';
    echo '<p class="error">ログインに失敗しました。</p>';
    echo '<div class="backb"><a href="login.php"><button class="back">ログイン画面へ</button></a></div>';
    require '../home/footer.php';
    echo '
    </div>
    </body>
    </html>';
}
?>