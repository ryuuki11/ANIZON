<?php session_start() ?>
<?php
if(isset($_POST['name1'])){
header("Location: buy-output.php");
exit;   
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/buy.css">
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>購入</title>
</head>
<body>
<div id="wrap">
<?php require '../home/header_sazae.php'; ?>
<?php
    $name=filter_input(INPUT_POST,"name1");
    $num=filter_input(INPUT_POST,"num");
    $sec=filter_input(INPUT_POST,"sec");
    $err="";
    if((!is_null($name) and $name==="")||(!is_null($num) and $num==="")||(!is_null($sec) and $sec==="")){
        $err="すべての項目に入力してください";
    }

?>
<?php
if(isset($_SESSION['member']['m_name'])){
        echo '<p class="shiharai">クレジットのみ</p>';
        echo '<a href="gachashosai.php?id=',$_SESSION['gacha'],'" class="back"><div class="buttn2"><button class="return">戻る</button></div></a>';
        echo '<form method="post">';
    echo '<div class="card">';
        echo '<p>カード名義</p>';
        echo '<input type="text" name="name1">';
        echo '<p>番号入力</p>';
        echo'<input type="text" name="num">';
        echo'<table>';
        echo'<tr>';
        echo'<td class="tp">有効期限</td><td class="tt">月</td><td class="tt">年</td>';
        echo'<tr><td></td><td><div class="month"><select class="month" name="month" >';
        
        echo'<option value="1">1</option>';
        echo'<option value="2">2</option>';
        echo'<option value="3">3</option>';
        echo'<option value="4">4</option>';
        echo'<option value="5">5</option>';
        echo'<option value="6">6</option>';
        echo'<option value="7">7</option>';
        echo'<option value="8">8</option>';
        echo'<option value="9">9</option>';
        echo'<option value="10">10</option>';
        echo'<option value="11">11</option>';
        echo'<option value="12">12</option>';
        echo'</div></td></select>';
        echo'<td><div class="year"><select  class="year" name="year">';
        echo'<option value="23">23</option>';
        echo'<option value="24">24</option>';
        echo'<option value="25">25</option>';
        echo'<option value="26">26</option>';
        echo'<option value="27">27</option>';
        echo'<option value="28">28</option>';
        echo'<option value="29">29</option>';
        echo'<option value="30">30</option>';
        echo'<option value="31">31</option>';
        echo'<option value="32">32</option>';
        echo'<option value="33">33</option>';
        echo'</div></td></tr>';
        echo'</table></select>';
        echo'<p>セキュリティーコード</p>';
        echo'<p>3桁</p>';
        echo'<input type="text" name="sec">';
        echo'</div>';
        echo'<div>';
        echo '<p class="allprice">合計 ',$_POST['kazu']*$_SESSION['gacha']['price'],'円</p>';
        $_SESSION['gacha']['num']=$_POST['kazu'];
    echo '</div>';
    echo '</form>';
    
        $_SESSION['flag']=1;
        echo '<div class="gachab"><button>購入</button></div>';
        echo '</form>';
    }else{
        echo '<p class="home">ログインしてください</p>';
        echo '<a href="../login/login.php" ><button class="home">ログイン画面へ</button></a>';
    }
    ?>
    <?php require '../home/footer.php'; ?>
    </div>
</body>
</html>