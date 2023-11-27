<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ガチャ一覧</title>
    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/gachaichiran.css">
</head>
<body>
    <h2>ガチャ一覧</h2>
    <div class="result">
        <div class="shohin">
            <a href="gachashosai.html" class="image">
                <img src="image/hiroaka/ヒロアカトップ.jpg" alt="【僕のヒーローアカデミア】">
                <p class="sname">僕のヒーローアカデミア</p>
                <p class="price">700円</p>
            </a>
        </div>
        <div class="shohin">
            <a href="gachashosai.html" class="image">
                <img src="image/juju/呪術トップ.jpg" alt="【呪術廻戦】">
                <p class="sname">呪術廻戦</p>
                <p class="price">700円</p>
            </a>
        </div>
        <div class="shohin">
            <a href="gachashosai.html" class="image">
                <img src="image/one/ワンピトップ.jpg" alt="【ONEPIECE】">
                <p class="sname">ワンピース</p>
                <p class="price">700円</p>
            </a>
        </div>
        <div class="shohin">
            <a href="gachashosai.html" class="image">
                <img src="image/spy/スパイトップ.jpg" alt="【スパイファミリー】">
                <p class="sname">スパイファミリー</p>
                <p class="price">700円</p>
            </a>
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