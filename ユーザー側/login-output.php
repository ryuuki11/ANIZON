<?php session_start(); ?>
<?php
    const SERVER = 'mysql219.phy.lolipop.lan';
    const DBNAME = 'LAA1518095-anizon';
    const USER = 'LAA1518095';
    const PASS = 'Pass0809';

    $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン成功</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php
unset($_SESSION['member']);
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('select * from Member where login=?');
$sql->execute([$_POST['login']]);
foreach ($sql as $row) {
    if($_POST['password']==$row['password']) {
        $_SESSION['member']=[
            'login'=>$row['login'],
            'password'=>$row['password']
        ];
    }
}

if (empty($_POST['login'])) {
    echo '<p>ログインIDを入力してください。</p>';
}else if (empty($_POST['password'])) {
    echo '<p>パスワードを入力してください。</p>';    
}else if (isset($_SESSION['member'])) {
    echo '<p>ログインしました。</p>';
    echo '<button onclick="location.href='home.php'">ホームページへ</button>';
}else{
    echo '<p>ログインに失敗しました。</p>';
}
?>
</body>
</html>