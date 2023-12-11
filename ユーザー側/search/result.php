<?php session_start()?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/result.css" />
    <link rel="stylesheet" href="../home/css/header_search.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>anizon</title>
</head>
    <body>
    <div id="wrap">
    <?php require '../home/header_search.php'; ?>
        
        <?php 

            if(isset($_SESSION['shohin_shosai']['id'])){
                unset($_SESSION['shohin_shosai']['id']);
            }
            const SERVER = 'mysql219.phy.lolipop.lan';
            const DBNAME = 'LAA1518095-anizon';
            const USER = 'LAA1518095';
            const PASS = 'Pass0809';
            $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
            $pdo=new PDO($connect,USER,PASS);
            $SQL='select * from Shohin where category != "ガチャ"';
            $SQLo='select * from Shohin where category != "ガチャ"';
            $sql=$pdo->prepare($SQL);
            $Category=['ALL','CD・DVD','漫画','グッズ'];
            $Sort=['price desc','price asc','sale desc','sale desc','date desc'];
            $Sortname=['高い順','安い順','人気順','人気順','おすすめ順'];
            $name="";
            $category="";
            $sort="";
                if(isset($_GET['category']) &&$_GET['category']!=0 ){
                    $category="カテゴリー：".$Category[$_GET['category']];
                        $SQL.=' and category="'.$Category[$_GET['category']].'"';
                        $SQLo.=' and (category="'.$Category[$_GET['category']].'"';
                    if(isset($_GET['name'])){
                        $SQLo.=' or';
                    }
                }else if(isset($_GET['name'])){
                    $SQLo.=' and';
                }
                if(isset($_GET['name'])){
                    $SQL.=' and s_name like "%'.$_GET['name'].'%"';
                    $SQLo.=' s_name like "%'.$_GET['name'].'%"';
                    if(!empty($_GET['name'])){
                        $name="商品名：".$_GET['name'];
                    }
                }
                if(isset($_GET['category'])){
                    if($_GET['category']!=0){
                        $SQLo.=')';
                        
                    }else{
                        $category="カテゴリー：全て";
                    }
                    
                }
                if(isset($_GET['sort'])){
                    $SQL.=' order by '.$Sort[$_GET['sort']];
                    $sort='並び順：'.$Sortname[$_GET['sort']];
                }
                $i=0;
                
            $sql=$pdo->query($SQL);

            echo '<div class="ht"><h2 class="title1">検索結果</h2><span class="first">',$name,'</span><span>',$category,'</span><span>',$sort,'</span></div>';
            
            echo '<div class="result">';
            foreach($sql as $row){
                echo '<div class="shohin">';
                echo'<a href="shosai.php?id=',$row['s_id'],'">';
                echo '<div class="ci">';
                echo '<img src="' . $row["image"] . '" alt="">';
                echo '</div>';
                    echo '<p class="name">',$row['s_name'],'</p>';
                    echo '<p>￥',$row['price'],' </p>';
                    echo '</a>';
                echo '</div>';
                $i++;
            }
            if($i==0){
                echo '<p class="mess">一致する商品がありません</p>';
            }
            echo '</div>';
            $sql=$pdo->query($SQLo);
        echo '<h2 class="title">こちらもおすすめ</h2>';
            echo '<div class="osusume">';
            $i=0;
            foreach($sql as $row){
                echo '<div class="shohin">';
                echo'<a href="shosai.php?id=',$row['s_id'],'">';
                echo '<div class="ci">';
                echo '<img src="' . $row["image"] . '" alt="">';
                echo '</div>';
                    echo '<p class="name">',$row['s_name'],'</p>';
                    echo '<p>￥￥',$row['price'],'</p>';
                    echo '</a>';
                echo '</div>';
                $i++;
                if($i==6){
                    break;
                }
            }
            echo '</div>';
        ?>
        <div class="space">
            <div class="botton">
                <botton id="botton">PAGETOP</botton>
            </div>
        </div>

            <?php require '../home/footer.php'; ?>
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