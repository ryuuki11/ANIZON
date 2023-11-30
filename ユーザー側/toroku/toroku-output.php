<?php session_start();?>
<?php
    const SERVER = 'mysql219.phy.lolipop.lan';
    const DBNAME = 'LAA1518095-anizon';
    const USER = 'LAA1518095';
    const PASS = 'Pass0809';

    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>

<link rel="stylesheet" href="css/toroku-output.css">
<?php

$pdo=new PDO ($connect,USER,PASS);
if(empty($_POST['login']) || empty($_POST['password']) || empty($_POST['m_name']) || empty($_POST['post']) || empty($_POST['address']) || empty($_POST['city']) || empty($_POST['town']) || empty($_POST['dal']) || empty($_POST['mail']) || empty($_POST['number'])){
    echo '<p>未入力の項目があります</p>';
    echo '<button onclick="location.href=',"'toroku-input.php'",'">戻る</button>';
}else{
     if(isset($_SESSION['Member'])){
        $login=$_SESSION['Member']['login'];
        $sql=$pdo->prepare('select * from Member where login!=? and password=?');
        $sql->execute([ $_POST['login'],$_POST['password']]);
    }else{
        $sql=$pdo->prepare('select * from Member where login=?');
        $sql->execute([$_POST['login']]);
    }
    if(!empty($sql->fetchAll())){
        echo '<p>ログインIDが既に使用されています。変更してください。</p>';
        echo '<button onclick="location.href=',"'toroku-input.php'",'">戻る</button>';
    }else if($sql=$pdo->prepare('insert into Member values(null,?,?,?,?,?,?,?,?,?,?,?)')) {
        $sql->execute ([
        $_POST['login'],$_POST['password'],$_POST['m_name'],$_POST['post'],$_POST['address'],$_POST['city'],$_POST['town'],$_POST['dal'],$_POST['apart'],$_POST['mail'],$_POST['number']]);
        echo '<p>お客様情報を登録しました。</p>';
        echo '<button onclick="location.href=',"'#.php'",'">ホーム</button>';
    }
}
?>