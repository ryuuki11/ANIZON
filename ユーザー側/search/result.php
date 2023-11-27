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
            <div class="result">
                <div class="shohin">
                    <img src="img/noimage.png" alt="">
                    <p>商品名</p>
                    <p>価格</p>
                </div>
                <div class="shohin">
                    <img src="img/noimage.png" alt="">
                    <p>商品名</p>
                    <p>価格</p>
                </div>
                <div class="shohin">
                    <img src="img/noimage.png" alt="">
                    <p>商品名</p>
                    <p>価格</p>
                </div>
                <div class="shohin">
                    <img src="img/noimage.png" alt="">
                    <p>商品名</p>
                    <p>価格</p>
                </div>
            </div>
        <h2 class="title">こちらもおすすめ</h2>
            <div class="osusume">
                <div class="shohin">
                    <img src="img/noimage.png" alt="">
                    <p>商品名</p>
                    <p>価格</p>
                </div>
                <div class="shohin">
                    <img src="img/noimage.png" alt="">
                    <p>商品名</p>
                    <p>価格</p>
                </div>
                <div class="shohin">
                    <img src="img/noimage.png" alt="">
                    <p>商品名</p>
                    <p>価格</p>
                </div>
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