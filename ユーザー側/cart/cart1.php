<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/header_sazae.css" />
    <link rel="stylesheet" href="css/cart1.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <title>anizon</title>
</head>
<<<<<<< HEAD
<body>
    <div id="wrap">
        <?php require '../home/header_sazae.php'; ?>
        <?php
            const SERVER = 'mysql219.phy.lolipop.lan';
            const DBNAME = 'LAA1518095-anizon';
            const USER = 'LAA1518095';
            const PASS = 'Pass0809';
            $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';
            $pdo = new PDO($connect, USER, PASS);
            if(isset($_SESSION['member']['m_name'])){
                $mess='';
                if(isset($_POST['delete'])){
                    $result = explode(" ", $_POST['delete']);
                    if (!empty($result[1])&&(isset($_SESSION["chkno"])) && ($result[1] == $_SESSION["chkno"])){
                        $num=1;
                        $sql = $pdo->prepare('SELECT * FROM Cart WHERE c_id = ?');
                        $sql ->execute([$result[0]]);
                        foreach($sql as $row) {
                            $m_id = $row['m_id'];
                            $s_id = $row['s_id'];
                        }
                        $sql_delete = $pdo->prepare('DELETE FROM Cart WHERE c_id = ? AND m_id = ? AND s_id = ?');
                        $sql_delete->execute([$result[0], $m_id, $s_id]);
                        $mess='カートから削除しました';
                    }else{
                        $num=0;
                    }
                }
                $_SESSION["chkno"] = $chkno = mt_rand();

                echo '<div class="name">',$_SESSION['member']['m_name'],'さんのカート</div>';
                echo '<hr>';
                $result = $pdo->query('select * from Cart inner join Shohin on Cart.s_id=Shohin.s_id');
                $_SESSION['check']=array();
                $array=array();
                echo '<form action="cart2.php" method="post">';
                $i=1;
                $j=0;
                    foreach ($result as $row) {
                        if ($_SESSION['member']['id'] == $row['m_id']) {
                            echo '<div class="cart-shohin">';
                            echo '<input type="checkbox" class="checkbox 1" id="c1" name="check[]" value="' . $i. '">';
                            echo '<label for="c1" class="check">';
                            echo '<p class="date">' . $row["c_date"] . '</p>';
                            echo '<div class="ci">';
                            echo '<img src="' . $row["image"] . '" alt="">';
                            echo '</div>';
                            echo '<div class="syosai">';
                            echo '<p class="sname" id="s_name">' . $row["s_name"] . '</p>';
                            echo '<p class="sname" id="name"></p>';
                            echo '<p class="price"><span class="piece">数量：'.$row['c_piece'].'</span><span class=cprice>'. $row["price"]*$row['c_piece'] .'円</span></p>';
                            echo '<div class="btn">';
                            echo '<p><button type="submit" class="delete" name="delete"  formaction="cart1.php" value="' , $row['c_id'].' ',$_SESSION['chkno'] . '">削除</button>';
                            echo '<button type="submit" class="buy" name="buy" value="',$row['c_id'],'">購入</button></p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</label>';
                            echo '</div>';
                            echo '<hr>';
                            $_SESSION['chkno2']=$_SESSION['chkno'];
                            $_SESSION['check'][]=$row['s_id'];
                            $_SESSION['check'][]='false';
                            $_SESSION['check'][]=$row['c_id'];
                            $i+=3;
                            $j++;
                        }
                    } 
                    if ($j!=0) { 
                    echo '<div class="select">';
                    echo '<button type="button" onClick="checkAll()">全選択</button>';
                    echo '<button type="button" onClick="uncheckAll()">選択解除</button>';
                    echo '</div>';
                    echo'<button class="all" name="all" value="2">まとめて購入</button>';
                    echo '</form>';
                    echo '<div class="backv"></div>';
                    echo '<div class="display_none">';
                    echo '<p>',$mess,'</p>';
                    echo '<div class="button"><a href="cart1.php"><button class="close">閉じる</button></a></div>';
                    echo '</div>'; 
                } else {
                    echo '<div class="mess">';
                    echo '<p class="cart">カートに商品がありません。</p>';
                    echo '<a href="../home/home.php" ><button class="home">ホームへ</button></a>';
                    echo '</div>';
                }

                $pdo = null;
                

            }else{
                echo '<div class="mess">';
                echo '<p class="home">ログインしてください</p>';
                echo '<a href="../login/login.php" ><button class="home">ログイン画面へ</button></a>';
                echo '</div>';
            }
            unset($_SESSION['cart']);
        ?>
        <?php require '../home/footer.php'; ?>
    </div>
    <script>
        //全て選択・解除
        const a = document.getElementById('s_name');
        const b = document.getElementById('name');
        const c = a.textContent;
        const d = c.split(' ');
        a.textContent = d[0];
        b.textContent = d[1];
        const checkbox1 = document.getElementsByName("check[]");

        
        
        //全て選択・解除
        function checkAll() {
            for (i = 0; i < checkbox1.length; i++) {
                checkbox1[i].checked = true;
            }
        }
        function uncheckAll() {
            for (i = 0; i < checkbox1.length; i++) {
                checkbox1[i].checked = false;
            }
        }

        
       
    </script>
    <script>
        //メッセージの表示切り替え
        const displayNone = document.querySelector('.display_none');
        const cartb = document.querySelector('.cartb');
        const closeb = document.querySelector('.close');
        const back = document.querySelector('.backv');
        let num = <?php echo $num; ?>;

        //メッセージの表示切り替え
        if(num==1){
            displayNone.style.visibility = 'visible';
            back.style.visibility = 'visible';
        }; 
                    
    </script>
</body>
=======
    <body>
            <p class="name">○○さんのカート</p>
            <hr>
            <div class="cart-shohin">
                <input type="checkbox" class="checkbox c1" id="c1" name="check">
                <label for="c1" class="check">
                <p class="date">11/24</p>
                <img src="img/noimage.png" alt="">
                <div class="syosai">
                    <p class="sname">商品名</p>
                    <p class="price">金額</p>
                    <div class="btn">
                        <p><button type="submit" class="delete">削除</button>
                        <button type="submit" class="buy">購入</button></p>
                    </div>
                </div>
                </label>
            </div>
            <hr>


            <div class="cart-shohin">
                <input type="checkbox" class="checkbox 1" id="c2" name="check">
                <label for="c2" class="check">
                <p class="date">11/30</p>
                <img src="img/noimage.png" alt="">
                <div class="syosai">
                    <p class="sname">商品名</p>
                    <p class="price">金額</p>
                    <div class="btn">
                        <p><button type="submit" class="delete">削除</button>
                        <button type="submit" class="buy">購入</button></p>
                    </div>
                </div>
                </label>
            </div>
            <hr>
            <div class="cart-shohin">
                <input type="checkbox" class="checkbox 1" id="c3" name="check">
                <label for="c3" class="check">
                <p class="date">11/30</p>
                <img src="img/noimage.png" alt="">
                <div class="syosai">
                    <p class="sname">商品名</p>
                    <p class="price">金額</p>
                    <div class="btn">
                        <p><button type="submit" class="delete">削除</button>
                        <button type="submit" class="buy">購入</button></p>
                    </div>
                </div>
                </label>
            </div>
            <hr>
            <div class="select">
                <button  onClick="checkAll()" >
                    全選択
                </button> 
                <button onClick="uncheckAll()">
                    選択解除
                </button>
            </div>
            <button class="all">
                まとめて購入
            </button>


            <script>
            const checkbox1 = document.getElementsByName("check")

function checkAll() {
  for(i = 0; i < checkbox1.length; i++) {
    checkbox1[i].checked = true
  }
}
function uncheckAll(){
    for(i = 0; i < checkbox1.length; i++) {
    checkbox1[i].checked = false;
  }
}
            </script>
    </body>
>>>>>>> ac4b04c3ad5a9b650f4f2c33cf27f2b82effe995
</html>