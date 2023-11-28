<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/header_sazae.css" />
    <link rel="stylesheet" href="css/cart3.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <title>anizon</title>
</head>
    <body>
            <div class="h">        
            <div class="name">○○さんのカート</div>
            <button>
                戻る
            </button>
            </div>
            <hr>
            <div class="cart-shohin">
                <p class="date">11/24</p>
                <img src="img/noimage.png" alt="">
                <div class="syosai">
                    <p class="sname">商品名</p>
                    <p class="price">金額</p>
                </div>
            </div>
            <hr>


            <div class="cart-shohin">
                <p class="date">11/30</p>
                <img src="img/noimage.png" alt="">
                <div class="syosai">
                    <p class="sname">商品名</p>
                    <p class="price">金額</p>
                </div>
            </div>
            <hr>
            <div class="cart-shohin">
                <p class="date">11/30</p>
                <img src="img/noimage.png" alt="">
                <div class="syosai">
                    <p class="sname">商品名</p>
                    <p class="price">金額</p>
                </div>
            </div>
            <hr>
            <p class="allprice">合計 1000円</p><br>
           
            <div class="buttn2"><button class="koushin" type="submit">変更する</button></div>
      
            <div class="addres">
                <p>ご住所</p>
                <p class="input">○○○○○○○○○○</p>
            </div>
            
            <p class="kin">支払い方法</p>
            <p class="select">
                <select class="shiharai" name="shiharai" data-switchvalue="2" data-target=".card">
                    <option value="1">代金引換</option>
					<option value="2">クレジット</option>
                </select>
            </p>
                        
                    
                <div class="card" style="display: none;">
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
        
            <div class="buttn"><button class="buy" type="submit">購入</button></div>

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