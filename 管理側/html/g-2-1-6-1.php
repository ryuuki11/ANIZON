<?php session_start(); ?>
<?php require '../db-connect.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
   
    // var_dump($_SESSION);
    $sql=$pdo->prepare('insert into Prize(p_name,s_id,rank,setumei,category,image) values (?,?,?,?,?,?)');
    $sql->execute([$_SESSION['Prize']['p_name'],$_SESSION['Prize']['p_id'],$_SESSION['Prize']['rank'],$_SESSION['Prize']['setumei'],$_SESSION['Prize']['category'],$_SESSION['Prize']['image']]);
    $flag=1;
    header('Location: g-2-1-4.php?flag='.$flag);
?>