<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/cart3.css" />
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <title>anizon</title>
</head>
    <body>
    <?php require '../home/header_sazae.php'; ?>
    <?php
    const SERVER = 'mysql219.phy.lolipop.lan';
    const DBNAME = 'LAA1518095-anizon';
    const USER = 'LAA1518095';
    const PASS = 'Pass0809';
 
    $connect = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';

    echo '<div class="h">';
        echo '<div class="name">津隈さんのカート</p>';
        echo '</div>';
        echo '<form action="cart2.php">';
        echo '<button>戻る</button>';
        echo '</form>';
        echo '</div>';
        echo '<hr>';
    // 接続確認
   

    // カートテーブルから商品情報を取得
    $pdo=new PDO($connect,USER,PASS);
    $result = $pdo->query('select *from Cart inner join Shohin on Cart.s_id=Shohin.s_id');

    if (!empty($result)){ 
        // 取得した商品情報を表示
        $total=0;
        $total=0;
        foreach($result as $row) {
            foreach($_SESSION['check'] as $key=>$value){
                if($value=='true'){
                    $j=$key+1;
                    if($_SESSION['check'][$j]==$row['c_id']){
                        echo '<div class="cart-shohin">';
                        echo '<p class="date">' . $row['date'] . '</p>';
                        echo '<img src="' . $row['image'] . '" alt="">';
                        echo '<div class="syosai">';
                        echo '<p class="sname" id="s_name">' . $row['s_name'] . '</p>';
                        echo '<p class="sname" id="name"></p>';
                        echo '<p class="price"><div class="piece">'.$row['c_piece'].'</div><div>'. $row["price"]*$row['c_piece'] .'</div></p>';
                        echo '</div>';
                        echo '</div>';
                        echo '<hr>';
                        $total+=$row['price']*$row['c_piece'];
                    }
                }
            }
        }
            echo '<p class="allprice">合計',$total,'円</p>';  
            echo '<div class="buttn2"><a href="cart4.php"><button class="koushin" type="submit">変更する</button></a></div>';
            echo '<div class="addres"><p>ご住所</p><p class="input">',$_SESSION['member']['address'],$_SESSION['member']['apart'],'</p></div>';
            echo '<p class="kin">支払い方法</p>';
            echo '<p class="select">';
            echo '<select class="shiharai" name="shiharai" data-switchvalue="2" data-target=".card">';
            echo '<option value="1">代金引換</option>';
			echo '<option value="2">クレジット</option>';
            echo '</select>';
            echo '</p>';
            echo '<div class="card" style="display: none;">';
            echo '<p>カード名義</p>';
            echo '<input type="text" name="name1">';
            echo '<p>番号入力</p>';
            echo '<input type="text" name="kusityou">';
            echo '<table>';
            echo '<tr>';
            echo '<td class="tp">有効期限</td><td class="tt">月</td><td class="tt">年</td>';
            echo '<tr><td></td><td><div class="month"><select class="month" name="month" >';
			echo '<option value="1">1</option>';
			echo '<option value="2">2</option>';
            echo '<option value="3">3</option>';
			echo '<option value="4">4</option>';
            echo '<option value="5">5</option>';
			echo '<option value="6">6</option>';
            echo '<option value="7">7</option>';
			echo '<option value="8">8</option>';
            echo '<option value="9">9</option>';
			echo '<option value="10">10</option>';
            echo '<option value="11">11</option>';
			echo '<option value="12">12</option>';
            echo '</div></td></select>';
            echo '<td><div class="year"><select  class="year" name="year">';
            echo '<option value="23">23</option>';
			echo '<option value="24">24</option>';
            echo '<option value="25">25</option>';
			echo '<option value="26">26</option>';
            echo '<option value="27">27</option>';
			echo '<option value="28">28</option>';
            echo '<option value="29">29</option>';
			echo '<option value="30">30</option>';
            echo '<option value="31">31</option>';
			echo '<option value="32">32</option>';
            echo '<option value="33">33</option>';
            echo '</div></td></tr>';
            echo '</table></select>';
            echo '<p>セキュリティーコード</p>';
            echo '<p>3桁</p>';
            echo '<input type="text" name="mansyon">';
            echo '</div>';
            echo '<div class="buttn"><a href="cart5.php"><button class="buy" type="submit">購入</button></a></div>';
}

    ?>
    <?php require '../home/footer.php'; ?>
           
            <script>
                $(function() {
                $('.shiharai').change(function () {
                    let selectVal = $(this).val();
                    let switchVal = $(this).data('swicthvalue');
                    let hideTgt = $(this).data('target');
                    if ( selectVal == 2 ) {//もし選択した項目が切り替え用の値と同じだったら
                    $(hideTgt).slideDown();//表示非表示を切り替える要素を表示する
                    } else {//違ったら
                    $(hideTgt).slideUp();//また隠す
                    }
                });
                });
            </script>
    </body>
</html>