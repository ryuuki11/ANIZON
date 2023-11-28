<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/buy.css">
    <title>購入</title>
</head>
<body>
        <p class="shiharai">クレジットのみ</p>
        <?php
        echo '<a href="gachashosai.php?id=',$_SESSION['gacha'],'" class="back"><div class="buttn2"><button class="return">戻る</button></div></a>';
        ?>
    <div class="card">
        <p>カード名義</p>
        <input type="text" name="name1">
        <p>番号入力</p>
        <input type="text" name="kusityou">
        <table>
            <tr>
            <td class="tp">有効期限</td><td class="tt">月</td><td class="tt">年</td>
            <tr><td></td><td><div class="month"><select class="month" name="month" >
        
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        </div></td></select>
        <td><div class="year"><select  class="year" name="year">
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
        <option value="32">32</option>
        <option value="33">33</option>
        </div></td></tr>
        </table></select>
        <p>セキュリティーコード</p>
        <p>3桁</p>
        <input type="text" name="mansyon">
    </div>
    <div>
        <?php
        echo '<p class="allprice">合計 ',$_POST['kazu']*$_SESSION['gacha']['price'],'円</p>';
        $_SESSION['gacha']['num']=$_POST['kazu'];
        ?>
    </div>
    <?php
        $_SESSION['flag']=1;
        echo '<a href="buy-output.php" class="gacha"><div class="gachab"><button>購入</button></div></a>';
    ?>
</body>
</html>