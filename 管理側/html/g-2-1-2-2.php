<?php session_start(); ?>
<?php require '../db-connect.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into Shohin(s_name,image,price,category,stock,date,setumei) values (?,?,?,?,?,current_date,?)');
    $sql->execute([$_SESSION['Shohin']['s_name'],$_SESSION['Shohin']['image'],$_SESSION['Shohin']['price'],$_SESSION['Shohin']['category'],$_SESSION['Shohin']['stock'],$_SESSION['Shohin']['setumei']]);
    $flag=1;
    header('Location: g-2-1-1.php?flag='.$flag);
?>