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
    <title>ログイン</title>
    <link rel="stylesheet" href="../css/g-1-1-1-output.css" />
</head>
<body>
<?php
unset($_SESSION['admin']);
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('select * from Admin where a_id=?');
$sql->execute([$_POST['id']]);
foreach ($sql as $row) {
    if($_POST['password']==$row['password']) {
        $_SESSION['admin']=[
            'id'=>$row['a_id'],
            'password'=>$row['password']
        ];
    }
}
 
if (empty($_POST['id'])) {
    echo '<p class="A">ログインIDを入力してください。</p>';
    echo '<div><button class="modoru" onclick="location.href=',"'g-1-1-1.php'",'">戻る</button></div>';
}else if (empty($_POST['password'])) {
    echo '<p class="B">パスワードを入力してください。</p>';
    echo '<div><button class="modoru" onclick="location.href=',"'g-1-1-1.php'",'">戻る</button></div>';  
}else if (isset($_SESSION['admin'])) {
    echo '<p class="c">ログインしました。</p>';
    echo '<div><button class="next" onclick="location.href=',"'g-1-1-2.php'",'">次のページへ</button></div>';
}else{
    echo '<p>ログインに失敗しました。</p>';
}
?>
</body>
</html>