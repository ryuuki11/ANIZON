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
if(empty($_SESSION['member']['login']) || empty($_SESSION['member']['password']) || empty($_SESSION['member']['m_name']) || empty($_SESSION['member']['post']) || empty($_SESSION['member']['address']) || empty($_SESSION['member']['city']) || empty($_SESSION['member']['town']) || empty($_SESSION['member']['dal']) || empty($_SESSION['member']['mail']) || empty($_SESSION['member']['number'])){
    echo '<p>未入力の項目があります</p>';
    echo '<button onclick="location.href=',"'toroku-input.php'",'">戻る</button>';
}else{
     if(isset($_SESSION['Member'])){
        $login=$_SESSION['Member']['login'];
        $sql=$pdo->prepare('select * from Member where login!=? and password=?');
        $sql->execute([ $_SESSION['member']['login'],$_SESSION['member']['password']]);
    }else{
        $sql=$pdo->prepare('select * from Member where login=?');
        $sql->execute([$_SESSION['member']['login']]);
    }
    if(!empty($sql->fetchAll())){
        echo '<p>ログインIDが既に使用されています。変更してください。</p>';
        echo '<button onclick="location.href=',"'toroku-input.php'",'">戻る</button>';
    }else if($sql=$pdo->prepare('insert into Member values(null,?,?,?,?,?,?,?,?,?,?,?)')) {
        $sql->execute ([
            $_SESSION['member']['login'],$_SESSION['member']['password'],$_SESSION['member']['m_name'],$_SESSION['member']['post'],$_SESSION['member']['address'],$_SESSION['member']['city'],$_SESSION['member']['town'],$_SESSION['member']['dal'],$_SESSION['member']['apart'],$_SESSION['member']['mail'],$_SESSION['member']['number']]);
        echo '<p>お客様情報を登録しました。</p>';
        echo '<button onclick="location.href=',"'#.php'",'">ホーム</button>';
    }
}
?>