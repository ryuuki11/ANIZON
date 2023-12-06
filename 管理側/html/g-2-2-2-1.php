<?php session_start(); ?>
<?php require '../db-connect.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('delete from Member where m_id=?');
    $sql->execute([$_SESSION['Member']['m_id']]);
    $deleteflag=$_SESSION['Member']['m_id'];
    header('Location: g-2-2-1.php?deleteflag='.$deleteflag);
?>