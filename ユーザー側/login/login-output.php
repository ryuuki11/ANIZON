<?php session_start(); ?>
<?php require '../db_connect.php'; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン成功</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="../home/css/header_title.css">
    <link rel="stylesheet" href="../home/css/footer.css">
</head>
<body>
<div id="wrap">
<?php require '../home/header_title.php'; ?>
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

if (empty($_POST['login'])) {
    echo '<p class="error">ログインIDを入力してください。</p>';
    echo '<div class="backb"><a href="login.php"><button class="back">ログイン画面へ</button></a></div>';
}else if (empty($_POST['password'])) {
    echo '<p class="error">パスワードを入力してください。</p>';  
    echo '<div class="backb"><a href="login.php"><button class="back">ログイン画面へ</button></a></div>';
}else if (isset($_SESSION['member'])) {
    echo '<p class="suc">ログインしました。</p>';
    echo '<div class="buttonsuc"><button class="next" onclick="location.href=',"'../home/home.php'",'">ホームへ</button></div>';
}else{
    echo '<p class="error">ログインに失敗しました。</p>';
    echo '<div class="backb"><a href="login.php"><button class="back">ログイン画面へ</button></a></div>';
}
?>

<?php require '../home/footer.php'; ?>
</div>
</body>
</html>