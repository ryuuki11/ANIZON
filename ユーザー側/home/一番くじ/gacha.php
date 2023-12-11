<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ガチャ【僕のヒーローアカデミア】</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/gacha.css">
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <script src="https://code.jquery.com/jquery.min.js"></script>
</head>
<?php
    const SERVER = 'mysql219.phy.lolipop.lan';
    const DBNAME = 'LAA1518095-anizon';
    const USER = 'LAA1518095';
    const PASS = 'Pass0809';
    $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('select i_rank from image where s_id=?');
    $sql->execute([$_SESSION['gacha']['id']]);
    $j=0;
    foreach($sql as $row){
        echo '<body class="',$row['i_rank'],'">';
        $j++;
    }
    if($j==0){
        echo '<body class="else">';
    }
    echo '<div id="wrap">';
    require '../home/header_sazae.php';


    $_SESSION['flag']=0;

    $sql=$pdo->prepare('select image from Shohin where s_id=?');
    $sql->execute([$_SESSION['gacha']['id']]);
    $image='';
    foreach($sql as $row){
        $image=$row['image'];
    }
    $sql=$pdo->prepare('select * from Prize where s_id=? order by rank asc');
    $sql->execute([$_SESSION['gacha']['id']]);
    echo '<div>';
    echo '<div class="img">';
    echo '<img src="',$image,'" alt="noimage">';
    echo '</div>';
    echo '<div class="slide">';
        echo '<div class="slide-inner">';
            foreach($sql as $row){
                echo '<div class="slide-item"><img src="',$row['image'],'"></div>';
            }
        echo '</div>';
    echo '</div>';
    echo '</div>';
    $sql=$pdo->prepare('select b_id from Buy where m_id=?');
    $sql->execute([$_SESSION['member']['id']]);
    $data=array();
    $i=0;
    foreach($sql as $row){
        $data[$i]=$row['b_id'];
        $i++;
    }
    $i=0;
    $sql=$pdo->prepare('select * from Orderhistory where s_id=?');
    $sql->execute([$_SESSION['gacha']['id']]);
    $num=0;
    foreach($sql as $row){
        for($j=0;$j<count($data);$j++){
            if($data[$j]==$row['b_id']){
                $num+=$row['o_piece'];
        $num-=$row['count'];
            }
        }
        
    }
    if($num<0){
        $num=0;
    }

    $Rate=array(
        'D'=>array('rate'=>70),
        'C'=>array('rate'=>15),
        'B'=>array('rate'=>10),
        'A'=>array('rate'=>5)
    );
    $max=100;
    $hit=mt_rand(0,(($max-1)));
    $rank='';
    foreach($Rate as $key => $record){
        $max-=$record['rate'];
        if($max<=$hit){
            $rank=$key;
            break;
        }
    }
    $_SESSION['gacha']['rank']=$rank;
    echo '<div class="bottom">';
    echo '<p>あと',$num,'回</p>';
    echo '<div class="backv"></div>';
    echo '<div class="display_none">';
    echo '<video id="video" src="video/sazae',$rank,'.mp4"></video>';
    echo '</div>';

    echo '<div class="button">';
    if($num==0){
        echo '<button type="button">ガチャを回す</button>';
    }else{
            echo '<button class="dis_none_bt">ガチャを回す</button>';
    }
    echo '</div>';
    echo '</div>';
    ?>
    <?php require '../home/footer.php'; ?>
    </div>

    <script>
        const displayNone = document.querySelector('.display_none');
        const dis_none_bt = document.querySelector('.dis_none_bt');
        const back = document.querySelector('.backv');
        var v = document.getElementById('video');
        dis_none_bt.addEventListener('click' ,  () => {
            if(displayNone.classList.contains('active')){
                displayNone.style.visibility = 'hidden';
                back.style.visibility = 'hidden';
                displayNone.classList.remove('active');
            }
            else {
                displayNone.style.visibility = 'visible';
                back.style.visibility = 'visible';
                displayNone.classList.add('active');
                    //再生
                v.play();
            }
        });

        v.addEventListener("ended", function()
        {
            window.location.href = 'tousen.php';
        });
    </script>
</body>
</html>