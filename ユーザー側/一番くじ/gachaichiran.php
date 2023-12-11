<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ガチャ一覧</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/gachaichiran.css">
</head>
<body>
    <h2>ガチャ一覧</h2>
    <div class="result">
    <?php
    const SERVER = 'mysql219.phy.lolipop.lan';
    const DBNAME = 'LAA1518095-anizon';
    const USER = 'LAA1518095';
    const PASS = 'Pass0809';
    $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->query('select * from Shohin where category="ガチャ"');
    foreach($sql as $row){
        echo '<div class="shohin">';
        echo '<a href="gachashosai.php?id=',$row['s_id'],'" class="image">';
        echo '<img src="',$row['image'],'" alt="noimage">';
        echo '<p class="sname">',$row['s_name'],'</p>';
        echo '<p class="price">＄',$row['price'],'円</p>';
        echo '</a>';
        echo '</div>';
    }
            
        

    ?>
    </div>

    <div class="botton">
        <botton id="botton">RAGETOP</botton>
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