<?php session_start(); ?>
<?php require '../db_connect.php'; ?>
<<<<<<< HEAD
=======

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン成功</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
>>>>>>> ac4b04c3ad5a9b650f4f2c33cf27f2b82effe995
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
            'dal'  =>$row['dal'],
            'apart' => $row['apart'],
            'mail' => $row['mail'],
            'number' => $row['number'],
            'id' =>$row['m_id']
        ];
    }
}


if (empty($_POST['login']) and empty($_POST['password'])) {
    echo '<p class="error">ログインIDとパスワードを入力してください。</p>';
    echo '<div class="backb"><a href="login.php"><button class="back">ログイン画面へ</button></a></div>';
}else if (empty($_POST['login'])) {
    echo '<p class="error">ログインIDを入力してください。</p>';
    echo '<div class="backb"><a href="login.php"><button class="back">ログイン画面へ</button></a></div>';
}else if (empty($_POST['password'])) {
    echo '<p>パスワードを入力してください。</p>';    
}else if (isset($_SESSION['member'])) {
    header('Location: ../home/home.php');
}else{
    echo '<p>ログインに失敗しました。</p>';
}
?>
