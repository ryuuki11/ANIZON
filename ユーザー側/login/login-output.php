<?php session_start(); ?>
<?php require '../db_connect.php'; ?>

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

if (empty($_POST['login'])) {
    echo '<p>ログインIDを入力してください。</p>';
}else if (empty($_POST['password'])) {
    echo '<p>パスワードを入力してください。</p>';    
}else if (isset($_SESSION['member'])) {
    echo '<p>ログインしました。</p>';
    echo '<div><button class="next" onclick="location.href=',"'home.php'",'">ホームへ</button></div>';
}else{
    echo '<p>ログインに失敗しました。</p>';
}
?>
</body>
</html>