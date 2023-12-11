<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/header_sazae.css" />
    <link rel="stylesheet" href="css/result.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <title>anizon</title>
</head>
    <body>
        <h2>検索結果</h2>
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
            $SQL='select * from Shohin';
            $SQLo='select * from Shohin';
            $sql=$pdo->prepare($SQL);
            $Category=['ALL','CD・DVD','漫画','グッズ'];
            $Sort=['price desc','price asc','sale desc'];
                if(isset($_GET['category'])){
                    if($_GET['category']!=0){
                        $SQL.=' where category="'.$Category[$_GET['category']].'"';
                        $SQLo.=' where category="'.$Category[$_GET['category']].'"';
                        if(isset($_GET['name'])){
                            $SQL.=' and ';
                            $SQLo.=' or ';
                        }
                    }else{
                        $SQL.=' where';
                        $SQLo.=' where';      
                    }
                }else if(isset($_GET['name'])){
                    $SQL.=' where';
                    $SQLo.=' where';                  
                }
                if(isset($_GET['name'])){
                    $SQL.=' s_name like "%'.$_GET['name'].'%"';
                    $SQLo.=' s_name like "%'.$_GET['name'].'%"';
                }
                if(isset($_GET['sort'])){
                    $SQL.=' order by '.$Sort[$_GET['sort']];
                }
                $i=0;
            $sql=$pdo->query($SQL);
            
            echo '<div class="result">';
            foreach($sql as $row){
                echo '<div class="shohin">';
                echo'<a href="shosai.php?id=',$row['s_id'],'">';
                    echo '<img src="',$row['image'],'" alt="">';
                    echo '<p>',$row['s_name'],'</p>';
                    echo '<p>',$row['price'],'</p>';
                    echo '</a>';
                echo '</div>';
                $i++;
            }
            if($i==0){
                echo '<p>一致する商品がありません</p>';
            }
            echo '</div>';
            $sql=$pdo->query($SQLo);
        echo '<h2 class="title">こちらもおすすめ</h2>';
            echo '<div class="osusume">';
            $i=0;
            foreach($sql as $row){
                echo '<div class="shohin">';
                echo'<a href="shosai.php?id=',$row['s_id'],'">';
<<<<<<< HEAD
<<<<<<< HEAD
                echo '<div class="ci">';
                echo '<img src="' . $row["image"] . '" alt="">';
                echo '</div>';
                    echo '<p class="name">',$row['s_name'],'</p>';
                    echo '<p>＄',$row['price'],' 円</p>';
=======
                    echo '<img src="',$row['image'],'" alt="">';
                    echo '<p>',$row['s_name'],'</p>';
                    echo '<p>',$row['price'],'</p>';
>>>>>>> ac4b04c3ad5a9b650f4f2c33cf27f2b82effe995
=======
                    echo '<img src="',$row['image'],'" alt="">';
                    echo '<p>',$row['s_name'],'</p>';
                    echo '<p>',$row['price'],'</p>';
>>>>>>> ac4b04c3ad5a9b650f4f2c33cf27f2b82effe995
                    echo '</a>';
                echo '</div>';
                $i++;
                if($i==6){
                    break;
                }
            }
            echo '</div>';
        ?>
            <div class="botton">
<<<<<<< HEAD
                <botton id="botton">PAGETOP</botton>
=======
                <botton id="botton">RAGETOP</botton>
>>>>>>> ac4b04c3ad5a9b650f4f2c33cf27f2b82effe995
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