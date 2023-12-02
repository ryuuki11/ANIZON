<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/order.css" />
    <link rel="stylesheet" href="../home/css/header_sazae.css">
    <link rel="stylesheet" href="../home/css/footer.css">
    <title>anizon</title>
</head>
    <body>  
    <?php require '../home/header_sazae.php'; ?>    
    
            <div class="name">○○さんの注文履歴</div>
                <hr>
                <div class="order-shohin">
                    <p class="date">11/24</p>
                    <img src="img/noimage.png" alt="">
                    <div class="syosai">
                        <p class="sname">商品名</p>
                        <p class="price">金額</p>
                    </div>
                </div>
                <hr>
    
    
                <div class="order-shohin">
                    <p class="date">11/30</p>
                    <img src="img/noimage.png" alt="">
                    <div class="syosai">
                        <p class="sname">商品名</p>
                        <p class="price">金額</p>
                    </div>
                </div>
                <hr>
                <div class="order-shohin">
                    <p class="date">11/30</p>
                    <img src="img/noimage.png" alt="">
                    <div class="syosai">
                        <p class="sname">商品名</p>
                        <p class="price">金額</p>
                    </div>
                </div>
                <hr>
                <button class="back">
                    戻る
                </button>
                <?php require '../home/footer.php'; ?>
    </body>
</html>