<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/header_search.css" />
    <title>anizon</title>
</head>
    <body>
        <div class="header">
            <div class="h">
                <div class="img">
                    <div class="hamburger-menu">
                        <input class="checkbox" type="checkbox" id="menu-btn-check">
                        <label for="menu-btn-check" class="menu-btn">
                            <span class="bar bar-top"></span>
                            <span class="bar bar-middle"></span>
                            <span class="bar bar-bottom"></span>
                        </label>
                        <label class="nav-unshown" id="nav-close" for="menu-btn-check"></label>
                        <div class="menu-content">
                            <h3 class="ninki">人気・おすすめ商品</h3>
                            <ul>
                                <li>
                                    <a href="../search/result.php?sort=4">おすすめ</a>
                                </li>
                                <li>
                                    <a href="../search/result.php?sort=3">人気ランキング</a>
                                </li>
                            </ul>
                            <h3>カテゴリー</h3>
                            <ul>
                                <li>
                                    <a href="#">CD・DVD</a>
                                </li>
                                <li>
                                    <a href="#">漫画</a>
                                </li>
                                <li>
                                    <a href="#">グッズ</a>
                                </li>
                            </ul>
                            <h3>条件検索</h3>
                            <ul>
                                <li>
                                    <a href="#">条件検索</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="title"><a class="a" href="../home/home.php"><span class="title">ANIZON</span></a></div>
                    <input type="checkbox" type="checkbox" id="human">
                    <div class="icon">
                        <label for="human" class="human">
                        <img class="humanicon" src="img/humanicon.png" width="30" height="30">
                        </label>
                        <a href=""><img class="cart" src="img/cart.png" width="30" height="30"></a>
                    </div>
                    <label class="nav-unshown" id="nav-close" for="human"></label>
                    <div class="human-menu">
                        <label class="bor"  for="human">
                        <span class="border border-top"></span>
                        <span class="border border-bottom"></span>
                        </label>
                        <div class="font">
                            <h3>アカウント情報</h3>
                            <ul>
                                <li>
                                    <a href="">アカウント情報</a>
                                </li>
                            </ul>
                            <h3>注文履歴</h3>
                            <ul>
                                <li>
                                    <a href="">注文履歴</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="search">
                    <form action="../search/result.php" method="get">
                        <input class="search" type="text" name="name" placeholder="検索" >
                        <button><img class="search" src="../image/search.png" width="25" height="20"></button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
    
