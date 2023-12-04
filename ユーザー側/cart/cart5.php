<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
    <head>

    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/cart5.css">
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>login</title>
</head>
<body>
<div id="wrap">
<?php require '../home/header_sazae.php'; ?>


<?php
    const SERVER = 'mysql219.phy.lolipop.lan';
    const DBNAME = 'LAA1518095-anizon';
    const USER = 'LAA1518095';
    const PASS = 'Pass0809';
    $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
    $pdo=new PDO($connect,USER,PASS);
    if(((!isset($_POST['name1']) || $_POST['name1']==="")||(!isset($_POST['sec']) || $_POST['sec']==="")||(!isset($_POST['num']) || $_POST['num']===""))&& $_POST['shiharai']==2){
        echo '<p class="error">すべての項目に入力してください</p>';
        echo '<div class="button"><a href="cart3.php"><button type="submit" class="top">入力画面へ</button></a></div>';
    }else{
    $result = $pdo->query('select * from Cart inner join Shohin on Cart.s_id=Shohin.s_id');
    $s_id=array();
    $s_name=array();
    $s_image=array();
    $o_piece=array();
    $o_price=array();
    if (!empty($result)){ 
        foreach($result as $row) {
            foreach($_SESSION['check'] as $key=>$value){
                if($value=='true'){
                    $j=$key+1;
                    if($_SESSION['check'][$j]==$row['c_id']){
                       $s_id[]=$row['s_id'];
                       $s_name[]=$row['s_name'];
                       $s_image[]=$row['image'];
                       $o_piece[]=$row['c_piece'];
                       $price=$row["price"]*$row["c_piece"];
                       $o_price[]=$price;
                    }
                }
            }
        }
    }


    if($_SESSION['cartflag']==1){
        $sql=$pdo->prepare('insert into Buy (m_id,date) values (?,CURRENT_DATE())');
        $sql->execute([$_SESSION['member']['id']]);
        $sql=$pdo->query('select * from Buy order by b_id desc');
        $num=0;
        foreach($sql as $row){
            if($num!=0){
                break;
            }
            $b_id=$row['b_id'];
            $num++;
        }
        for($i=0;$i<count($s_id);$i++){
            $sql=$pdo->prepare('insert into Orderhistory (b_id,s_id,s_name,s_image,o_piece,o_price,count) values(?,?,?,?,?,?,0)');
            $sql->execute([$b_id,$s_id[$i],$s_name[$i],$s_image[$i],$o_piece[$i],$o_price[$i]]);
        }
        $_SESSION['cartflag']=0;
    }$result = $pdo->query('select * from Cart inner join Shohin on Cart.s_id=Shohin.s_id');
    if (!empty($result)){ 
        foreach($result as $row) {
            foreach($_SESSION['check'] as $key=>$value){
                if($value=='true'){
                    $j=$key+1;
                    if($_SESSION['check'][$j]==$row['c_id']){
                        $sql_delete = $pdo->prepare('DELETE FROM Cart WHERE c_id = ?');
                         $sql_delete->execute([$row['c_id']]);
                    }
                }
            }
        }
    }
   

        echo '<p class="name">',$_SESSION['member']['m_name'],'さん</p>';
            echo '<p class="order">注文完了です</p>';
            
      
            

        echo '<div><button type="submit" class="top">トップページへ</button></div>';
}
?>

        <?php require '../home/footer.php'; ?>
        </div>
</body>
</html>