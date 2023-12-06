<?php session_start(); ?>
<?php require '../db-connect.php'; ?>
<?php
    $pdo=new PDO($connect,USER,PASS);
    if ($_POST['num']==1) {
        $sql=$pdo->prepare('delete from Prize where p_id=?');
        $sql->execute([$_SESSION['Prize']['p_id']]);
        $deleteflag=1;
        header('Location: g-2-1-4.php?deleteflag='.$deleteflag);
    }else{
        $sql=$pdo->prepare('update Prize set s_id=?,category=?,rank=?,p_name=?,image=?,setumei=? where p_id=?');
        $sql->execute([
            $_SESSION['Prize']['s_id'],$_SESSION['Prize']['category'],$_SESSION['Prize']['rank'],$_SESSION['Prize']['p_name'],$_SESSION['Prize']['image'],$_SESSION['Prize']['setumei'],$_SESSION['Prize']['p_id']
        ]);
        $updateflag=1;
        header('Location: g-2-1-4.php?updateflag='.$updateflag);
    }
?>