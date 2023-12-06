<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/header_search.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/footer.css" />

    <title>anizon</title>
</head>
<body>
       <div id="wrap"> 
        <?php require 'header_search.php';?>
        <img class="stopper" src="img/back.png" alt="">
        <div class="pic-ctn">
            <img src="img/anime1.jpg" alt="" class="pic">
            <img src="img/anime2.jpg" alt="" class="pic">
            <img src="img/anime3.jpg" alt="" class="pic">
            <img src="img/anime5.jpg" alt="" class="pic">
            <img src="img/anime7.jpg" alt="" class="pic">
            <img src="img/anime8.jpg" alt="" class="pic">
        </div>
        <div class="back">
            <img src="img/back.png" alt="">
        </div>
        
        <h2>人気商品</h2>
        <div class="ninki">
            <?php
            const SERVER = 'mysql219.phy.lolipop.lan';
            const DBNAME = 'LAA1518095-anizon';
            const USER = 'LAA1518095';
            const PASS = 'Pass0809';
            $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
            $pdo = new PDO($connect, USER, PASS);

            $sql = $pdo->query('select * from Shohin where category!="ガチャ" order by sale desc');
            $i=0;
            foreach($sql as $row){
                echo '<div class="syohin1">';
                    echo '<img src="',$row['image'],'" alt="">';
                    echo '<p>',$row['s_name'],'</p>';
                    echo '<p>',$row['price'],'</p>';
                echo '</div>';
                $i++;
                if($i==8){
                    break;
                }
            }
            ?>
        </div>
        <div class="lot">
            <a href="../一番くじ/gachaichiran.php"><img src="img/ガチャ.png" alt=""></a>
        </div>
        <h2>おすすめアニメ</h2>
        <div class="osusume">
            <div class="osusume1">
                <p class="jojo">
                        <img src="img/osusume1.jpg" alt="">
                </p>
                <p>ジョジョの奇妙な冒険</p>
            </div>
            <div class="osusume2">
                <p class="HANTER"><img src="img/ゴン.jpg" alt=""></p>
                <p>HANTER×HANTER</p>
            </div>
            <div class="osusume3">
                <p class="tensura"><img src="img/tensurajpg.jpg" alt=""></p>
                <p>転生したらスライムだった件</p>
            </div>
            <div class="osusume4">
                <p class="naruto"><img src="img/naruto.jpg" alt=""></p>
                <p>ナルト</p>
            </div>
            <div class="osusume5">
                <p class="conan"><img src="img/conan.png" alt=""></p>
                <p>名探偵コナン</p>
            </div>
            <div class="osusume6">
                <p class="shadow"><img src="img/シャドーハウス.jpg" alt=""></p>
                <p>シャド―ハウス</p>
            </div>
        </div>
        <div class="botton">
            <botton id="botton">RAGETOP</botton>
        </div>

        <?php require 'footer.php'; ?>
    </div>

    <script>
        const scroll_to_top_btn = document.querySelector('botton');  
        scroll_to_top_btn.addEventListener( 'click' , scroll_to_top );
        function scroll_to_top(){
            window.scroll({top: 0, behavior: 'smooth'});
        };
    </script>
</body>
</html>