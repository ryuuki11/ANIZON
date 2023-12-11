<?php session_start();?>
<?php require '../db_connect.php'; ?>

<link rel="stylesheet" href="css/toroku-output.css">
<?php
$pdo=new PDO ($connect,USER,PASS);
if(empty($_SESSION['member']['login']) or empty($_SESSION['member']['password']) or empty($_SESSION['member']['m_name']) or empty($_SESSION['member']['post']) or empty($_SESSION['member']['address']) or empty($_SESSION['member']['city']) or empty($_SESSION['member']['town']) or empty($_SESSION['member']['dal']) or empty($_SESSION['member']['mail']) or empty($_SESSION['member']['number'])){
    echo '<p>未入力の項目があります</p>';
    echo '<button onclick="location.href=',"'toroku-input.php'",'">戻る</button>';
}else{
     if(isset($_SESSION['member'])){
        $login=$_SESSION['member']['login'];
        $sql=$pdo->prepare('select * from Member where login!=?');
        $sql->execute([ $_SESSION['member']['login']]);
    }else{
        $sql=$pdo->prepare('select * from Member where login=?');
        $sql->execute([$_SESSION['member']['login']]);
    }
    if(!empty($sql->fetchAll())){
        $sql=$pdo->prepare('insert into Member values(null,?,?,?,?,?,?,?,?,?,?,?,0)');
        $sql->execute([
                $_SESSION['member']['login'],$_SESSION['member']['password'],$_SESSION['member']['m_name'],$_SESSION['member']['post'],$_SESSION['member']['address'],$_SESSION['member']['city'],$_SESSION['member']['town'],$_SESSION['member']['dal'],$_SESSION['member']['apart'],$_SESSION['member']['mail'],$_SESSION['member']['number']]);
            echo '<p>お客様情報を登録しました。</p>';
            echo '<button onclick="location.href=',"'../home/home.php'",'">ホーム</button>';
    }else{
        echo '<p>ログインIDが既に使用されています。変更してください。</p>';
        echo '<button onclick="location.href=',"'toroku-input.php'",'">戻る</button>';
    }
}
?>