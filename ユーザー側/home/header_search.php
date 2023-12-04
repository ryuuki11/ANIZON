
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
                                    <a href="#">おすすめ</a>
                                </li>
                                <li>
                                    <a href="#">人気ランキング</a>
                                </li>
                            </ul>
                            <h3>カテゴリー</h3>
                            <ul>
                            <li>
                                    <a href="../search/result.php?category=1">CD・DVD</a>
                                </li>
                                <li>
                                    <a href="../search/result.php?category=2">漫画</a>
                                </li>
                                <li>
                                    <a href="../search/result.php?category=3">グッズ</a>
                                </li>
                            </ul>
                            <h3>条件検索</h3>
                            <ul>
                                <li>
                                    <a href="../search/search.php">条件検索</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="../home/home.php"></a><span class="title">ANIZON</span></a>
                    <input type="checkbox" type="checkbox" id="human">
                    <div class="icon">
                        <label for="human" class="human">
                        <img class="humanicon" src="../image/humanicon.png" width="30" height="30">
                        </label>
                        <a href="../cart/cart1.php"><img class="cart" src="../image/cart.png" width="30" height="30"></a>
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
                                <a href="../account/account2-1.php">アカウント情報</a>
                            </li>
                            <?php
                            if(isset($_SESSION['member']['m_name'])){
                                echo '<li>';
                                echo '<a href="../home/logout.php">ログアウト</a>';
                            echo '</li>';
                            }else{
                                echo '<li>';
                                echo '<a href="../login/login.php">ログイン/新規登録</a>';
                                 echo '</li>';
                            }
                            ?>
                            </ul>
                            <h3>注文履歴</h3>
                            <ul>
                                <li>
                                    <a href="../account/order.php">注文履歴</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="search">
                    <form action="../search/result.php" method="get">
                        <input class="search" type="text" name="name" placeholder="検索" >
                        <button><img class="search" src="../image/search.png" width="25" height="20"><button>
                    </form>
                </div>
            </div>
        </div>
    
