<?php session_start(); ?>
<?php require '../db-connect.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into Prize(s_id,category,rank,p_name,image,setumei) values (?,?,?,?,?,?)');
    $sql->execute([$_SESSION['Shohin']['id'],$_SESSION['Shohin']['category'],$_SESSION['Shohin']['rank'],$_SESSION['Shohin']['name'],$_SESSION['Shohin']['pass'],$_SESSION['Shohin']['explain']]);
    $flag=1;
    header('Location: g-2-1-4.php?flag='.$flag);
?>