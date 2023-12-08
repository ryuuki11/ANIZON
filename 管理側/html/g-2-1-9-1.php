<?php session_start(); ?>
<?php require '../db-connect.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    if ($_POST['num']==1) {
        $sql=$pdo->prepare('delete from Shohin where s_id=?');
        $sql->execute([$_SESSION['Shohin']['s_id']]);
        $deleteflag=1;
        header('Location: g-2-1-1.php?deleteflag='.$deleteflag);
    }else{
        $sql=$pdo->prepare('update Shohin set s_name=?,category=?,price=?,stock=?,setumei=?,image=? where s_id=?');
        $sql->execute([
            $_SESSION['Shohin']['s_name'],$_SESSION['Shohin']['category'],$_SESSION['Shohin']['price'],$_SESSION['Shohin']['stock'],$_SESSION['Shohin']['explain'],$_SESSION['Shohin']['pass'],$_SESSION['Shohin']['s_id']
        ]);
        $updateflag=1;
        header('Location: g-2-1-1.php?updateflag='.$updateflag);
    }
?>