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
</html>