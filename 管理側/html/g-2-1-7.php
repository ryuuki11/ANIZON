<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/g-2-1-7.css" />
    <title>登録確認画面</title>
</head>
<body>
    <h1>anizon</h1><br>
    <div class="all">
        <div class="table">
            <?php
                $name=$category=$explain=$price=$stock=$pass='';
                    $_SESSION['Shohin']['name']=$_POST['name'];
                    $_SESSION['Shohin']['category']=$_POST['category'];
                    $_SESSION['Shohin']['explain']=$_POST['explain'];
                    $_SESSION['Shohin']['price']=$_POST['price'];
                    $_SESSION['Shohin']['stock']=$_POST['stock'];
                    $_SESSION['Shohin']['pass']=$_POST['pass'];

            $both="";
            $both2="";
            if(isset($_POST['Ktoroku'])){
                $both="ランク";
                $both2="商品ID";  
            }else if(isset($_POST['toroku'])){
                $both="カテゴリー";
                $both2="値段";
            }  
            
            echo '<table>';
                echo '<tr>
                    <td class="td2"><p>商品名</p></td><td class="td3">',$_POST['name'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>',$both,'</p></td><td class="td3">',$_POST['category'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>商品説明</p></td><td class="td3">',$_POST['explain'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>',$both2,'</p></td><td class="td3">',$_POST['price'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>在庫情報</p></td><td class="td3">',$_POST['stock'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>画像パス</p></td><td class="td3">',$_POST['pass'],'</td>
                </tr><br>';
                
        echo '</table>';
            $result="";
            if(isset($_POST['toroku'])){
                $result="登録";
            }else if(isset($_POST['Ktoroku'])){
                $result="登録";
            }
        echo '</div>';
        echo '<div class="delete">';
        echo '<h2>この内容で',$result,'しますか?</h2><br>';
        ?>
            <div class="brn">
                        <form action="g-1-1-2.php" method="post">
                            <button type="submit" class="yes">はい</button>
                        </form>
                        <form action="g-2-1-2.php" method="post">
                            <button type="submit" class="no">いいえ</button>
                        </form>
            </div>
        </div>
    </div>
</body>
</html>