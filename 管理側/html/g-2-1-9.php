<?php session_start()?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/g-2-1-9.css" />
    <title>商品削除確認画面</title>
</head>
<body>
    <h1>anizon</h1><br>
    <div class="all">
        <div class="table">
            <?php
                $s_name=$s_id=$category=$price=$pass=$explain='';
                $_SESSION['Shohin']['s_name']=$_POST['s_name'];
                $_SESSION['Shohin']['s_id']=$_POST['s_id'];
                $_SESSION['Shohin']['category']=$_POST['category'];
                $_SESSION['Shohin']['price']=$_POST['price'];
                $_SESSION['Shohin']['pass']=$_POST['pass'];
                $_SESSION['Shohin']['explain']=$_POST['explain'];

        
            echo '<table>';
                echo '<tr>
                    <td class="td2"><p>商品名</p></td><td class="td3">',$_POST['s_name'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>商品ID</p></td><td class="td3">',$_POST['s_id'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>カテゴリー</p></td><td class="td3">',$_POST['category'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>説明</p></td><td class="td3">',$_POST['price'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>画像パス</p></td><td class="td3">',$_POST['pass'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>在庫情報</p></td><td class="td3">',$_POST['explain'],'</td>
                </tr><br>';
                echo '<tr>
                    <td class="td2"><p>画像パス</p></td><td class="td3">',$_POST['pass'],'</td>
                </tr><br>';
                
        echo '</table>';
        echo '</div>';
        ?>
        <div class="delete">
        <h2>この内容で削除しますか?</h2><br>
            <div class="brn">
                        <form action="g-1-1-2.php" method="post">
                            <button type="submit"class="yes">はい</button>
                        </form>
                        <form action="g-2-1-2.php" method="post">
                            <button type="submit" class="no">いいえ</button>
                        </form>
            </div>
        </div>
    </div>
</body>
</html>